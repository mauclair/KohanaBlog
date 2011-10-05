<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax extends Controller {

	public function action_emailunique()
	{
		//получаем электронную почту из формы
		$email = Arr::get($_POST, 'email', '');
		
		$myuser = new Model_Myuser();
		//проверка на уникальность
		$res = $myuser->username_unique($email);

		//отправка результата проверки аяксу
		echo json_encode(array('result' => $res));
	}
	
	public function action_checkOldPass()
	{
		//получаем старый пароль из формы
		$oldpass = Arr::get($_POST, 'oldpass', '');

		$myuser = new Model_Myuser();
		//проверка на наличие в базе
		$res = $myuser->checkOldPass($oldpass);
		//отправка результата аяксу
		echo json_encode(array('result' => $res));
	}
	
}