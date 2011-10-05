<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Account extends Mycontrollerlogin {

	public $template = 'basic';

	public function action_index()
	{

		$data = array();
		$myuser = new Model_Myuser();
		//запись в массив текущего имени пользователя
		$data = $myuser->displayusername();

		//если нажата кнопка изменения пароля
		if(isset($_POST['btnsubmit']))
		{
			//получаем старый и новый пароль из формы
			$oldpass = Arr::get($_POST, 'oldpass', '');
			$newpass1 = Arr::get($_POST, 'newpass1', '');
			$newpass2 = Arr::get($_POST, 'newpass2', '');
			//проверяем и сохраняем новый пароль
			if($myuser->saveNewPass($oldpass, $newpass1, $newpass2))
			{
				$data['newpassok'] = '';
			}
			//если есть ошибки вывести их
			else
			{
				$data['errors'] = $myuser->getErrors();
			}
		}
		//если нажата кнопка изменения имени пользователя
		if(isset($_POST['btnsubmit2']))
		{
			$newname = Arr::get($_POST, 'username', '');
			$member = ORM::factory('userchange', $myuser->getId()); 
	        // перезаписываем имя пользователя
	        $member->username = $newname;
	        try
        	{
            $member->save();
            // редирект на страницу пользователя
            $this->request->redirect('account/');
            $data['newuserok'] = '';
        	}
        	//если есть ошибки - вывести их из папки validation
        	catch (ORM_Validation_Exception $e)
        	{
            $data['errors'] = $e->errors('validation');             
        	}
        	
		}
		//если нажата кнопка отправки инвайта
		if(isset($_POST['btnsubmit3']))
		{
			$regcode = new Model_Makecode;
			//получаем е-мэйл получателя из формы
			$invite = Arr::get($_POST, 'invite', '');
			$useful = new Model_Useful();
			$myuser->username = $invite;
			try
			{
				//проверяем введенный е-мэйл на правильность и уникальность
				$myuser->check();
				//генерируем инвайт
				$gencode = $useful->generatePassword(15);
				//запись кода в таблицу с кодами инвайтов
		        $regcodetemp = ORM::factory('makecode');
		        $regcodetemp->code = $gencode;
		         try
		        {
		        $regcodetemp->save();
		        //отправка инвайта на введенный е-мэйл
		        $regcode->send_code($invite, $data['username'], $gencode);
		        // редирект на страничку пользователя
		            $this->request->redirect('account/');
		            $data['inviteok'] = '';
		    	}
		    	//если есть ошибки - вывести их из папки validation
		    	catch (ORM_Validation_Exception $e)
		        {
		        $data['errors'] = $e->errors('validation');           
		       	}
		       		
			}
			//если есть ошибки - вывести их из папки validation
			catch (ORM_Validation_Exception $e)
	        {
	        $data['errors'] = $e->errors('validation');           
	       	}
        
        	
		}
		//вывод массива в отображение
		$this->template->content =  View::factory('accountview', $data);
	}

}
