<?php defined('SYSPATH') or die('No direct script access.');

class Model_Makecode extends ORM 
{

protected $_table_name = 'regcodes';
protected $errors = array();

	public function rules()
	{
			return array(
				'code' => array(
				array('not_empty'),
			),);   
	}
	

    public function send_code($email, $username, $genpass)
    {
    	$useful = new Model_Useful();
    	$from = 'authentication@yetanotherblog.pp.ua';
        $subject = 'Регистрация в блоге';
        $message = "Вы были приглашены зарегистрироваться пользователем $username на сайт. Ваш специальный код: $genpass. Вы можете зарегистрироваться по адресу http://yetanotherblog.pp.ua/auth/reg";
        $useful->sendemail($email, $from, $subject, $message, TRUE);
        return TRUE;
    }

    public function get_errors()
    {
    	return $this->errors;
    }


}
