<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller_Template {

	public $template = 'basic';
	
	public function action_index()
	{
		$auth = Auth::instance();
		$data = array();
		//авторизован ли пользователь
		if($auth->logged_in())
		{
			//редирект на главную
			Request::initial()->redirect('');
		}
		else
		{
			//если нажата кнопка вход
			if(isset($_POST['btnsubmit']))
			{
				//получаем логин и пароль из формы
				$login = Arr::get($_POST, 'login', '');
				$password = Arr::get($_POST, 'password', '');
				
				if($auth->login($login, $password))
				{			
					//если проверка прошла - редирект на страницу с которой пользователь пришел
					$session = Session::instance();
					$auth_redirect = $session->get('auth_redirect', '');
					$session->delete('auth_redirect');
					
					Request::initial()->redirect($auth_redirect);
				}
				else
				{
					//если есть ошибки вывести их
					$data["error"] = "";
				}
			}
		}
		$this->template->content =  View::factory('authview', $data);
	}

	//контроллер формы с аяксом на главной
	public function action_form()
	{
		//Закрываем доступ к контроллеру первичным зарпосам
		if($this->request->is_initial())
		{
			throw new HTTP_Exception_404('File not found!');
		}

		$this->auto_render = FALSE; //не использовать главный шаблон вида "basic"

		$auth = Auth::instance();
		if($auth->logged_in())
		{
			//если залогинен вывод ссылки Выход и Аккаунт
			$this->response->body(View::factory('authformlogoutview'));
		}
		else
		{
			//если незалогинен вывод ссылки Вход и Забыли пароль?
			$this->response->body(View::factory('authformloginview'));
		}

	}
	//контроллер регистрации
	public function action_reg()
	{
		$data = array();
		//если нажата кнопка зарегистрироваться
		if(isset($_POST['btnsubmit']))
		{
			//получение электронной почты и кода инвайта из формы
			$email = Arr::get($_POST, 'email', '');
			$regcodevalue = Arr::get($_POST, 'regcodevalue', '');

			$register = new Model_Register();
			//проверка и внесение в базу
			if($register->reg($email, $regcodevalue, 1))
			{				
				$data["regok"] = "";
			}
			else
			{
				//если есть ошибки - вывести их
				$data["errors"] = $register->errors;
			}		
		}
		
		$this->template->content =  View::factory('regview', $data);
	}
	
	//контроллер логаута
	public function action_logout()
	{
		//логаут текущего пользователя и редирект его на главную
		$auth = Auth::instance();
		$auth->logout();
		$this->template->content = "Разлогинились";
		Request::initial()->redirect('');
	}

	//контроллер восстанавливающий пароль аккаунта
        public function action_hochuvspomnit()
	{
            $data = array();
            //если нажата кнопка восстановления пароля
            if(isset($_POST['btnsubmit']))
            {
            	//получаем электронную почту из формы
                $email = Arr::get($_POST, 'email', '');

                $register = new Model_Register();
                //генерация нового пароля и отправка его на электронную почту пользователю
                if($register->hochuNoviyParol($email))
                {
                    $data["ok"] = "";
                }
                else
                {
               	//если есть ошибки - вывести
                    $data["error"] = "";
                }
            }
            $this->template->content =  View::factory('rempassview', $data);
        }

        //контроллер регулирующий процесс восстановления по ссылке из е-мэйла
        public function action_checkcode($code)
         {
            $data = array();

            $register = new Model_Register();
            //проверяем и обновляем в базе новый пароль
            if($register->obnovlenieparolia($code))
            {
                $data["ok"] = "";
            }
            else
            {
                $data["error"] = "";
            }
             $this->template->content =  View::factory('checkcodeview', $data);
         }

} // End Welcomе
