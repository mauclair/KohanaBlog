<?php defined('SYSPATH') or die('No direct script access.');

class Model_Register
{
    //регистрация пользователя
	public function reg($email, $regcodevalue, $role)	
	{
		$regcode = new Model_Regcode();
		$myuser = new Model_Myuser();
		
		$regcode->code = $regcodevalue;
		
		try
		{
			$regcode->check();
		}
		catch(ORM_Validation_Exception $e)
		{
			$this->errors = $e->errors('validation');
			return FALSE;
		}
		
		// Создаем пользователя
		$myuser->username = $email;
		$myuser->email = $email;
		
                //Генерируем пароль
                $useful = new Model_Useful();
                $genpass = $useful->generatePassword(8);

                $auth = Auth::instance();
		$myuser->password = $auth->hash_password($genpass);
        		
		try		
		{
			$myuser->save();
			
			// Узнаем id созданного пользователя
			$usertemp = ORM::factory('myuser', array('email'=>$email));
			$adduserid = $usertemp->id;
			
			//Сохранение роли
			$addrole = new Model_Addrole();
			$addrole->user_id = $adduserid;
			$addrole->role_id = $role;
			$addrole->save();

                        //Дизактивация регистрационного кода
                        $regcode->disactive_code($regcodevalue, $adduserid);

                        //Отправка эл. почты
                        $from = 'authentication@yetanotherblog.pp.ua';
                        $subject = 'Регистрация в блоге';
                        $message = "Ваш логин: $email Ваш пароль: $genpass";
                        $useful->sendemail($email, $from, $subject, $message, FALSE);
			
			return TRUE;
		}
		catch(ORM_Validation_Exception $e)
		{
			$this->errors = $e->errors('validation');
			return FALSE;
		}
		
	}
    //восстановление пароля
        public function hochuNoviyParol($email)
	{
            $usertemp = ORM::factory('myuser', array('username'=>$email));
            //если такого имейла нет - выход
            if(!$usertemp->loaded())
            {
                return FALSE;
            }

            $useful = new Model_Useful();
            //генерация временного пароля
            $genpass = $useful->generatePassword(18);

            $usertemp->rempass = $genpass;
            $usertemp->save();
            //сохранение временного пароля

            //Отправка эл. почты
            $from = 'authentication@yetanotherblog.pp.ua';
            $subject = Kohana::message('reg', 'subject');

            $data = array ('genpass' => $genpass);
            $message = View::factory('email/emailviews', $data);
            $useful->sendemail($email, $from, $subject, $message, TRUE);

            return TRUE;
        }
        //обновление пароля при переходе с имейла
         public function obnovlenieparolia($code)
	{
            $usertemp = ORM::factory('myuser', array('rempass'=>$code));

            if(!$usertemp->loaded())
            {
               return FALSE;
            }

            $useful = new Model_Useful();
            $genpass = $useful->generatePassword(8);

             //Хеширование пароля
             $auth = Auth::instance();
             $usertemp->password = $auth->hash_password($genpass);

             //Очистка кода восстановления
             $usertemp->rempass = NULL;

             $usertemp->save();

             //Отправка эл. почты
            $email = $usertemp->username;

            $from = 'authentication@yetanotherblog.pp.ua';
            $subject = 'Авторизационные данные обновлены';
            $message = "Ваш логин: $email Ваш пароль: $genpass";
            $useful->sendemail($email, $from, $subject, $message, FALSE);

            return TRUE;

        }
}
