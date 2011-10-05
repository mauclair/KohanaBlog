<?php defined('SYSPATH') or die('No direct script access.');

class Model_Regcode extends ORM 
{

protected $errors = array();
//описание правил валидации
	public function rules()
	{
			return array(
				'code' => array(
				array('not_empty'),
				array(array($this, 'bad_code')),
				),
			);    
	}
	//проверка на присвоение коду пользователя 	
	public function bad_code($code)
    {
        $regcodetemp = ORM::factory('regcode', array('code'=>$code));
		
		if($regcodetemp->loaded())
		{
			if($regcodetemp->user_id == NULL)
			{
				return TRUE;
			}
			else
			{
				return FALSE;
			}
		}
		else
		{
			return FALSE;
		}
    }
    //дизактивация кода => присвоение коду id пользователя
    public function disactive_code($code, $user_id)
    {

         $regcodetemp = ORM::factory('regcode', array('code'=>$code));
         $regcodetemp->user_id = $user_id;
         $regcodetemp->save();

    }
    //возвращает ошибки
    public function get_errors()
    {
    	return $this->errors;
    }


}
