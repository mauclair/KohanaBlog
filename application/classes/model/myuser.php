<?php defined('SYSPATH') or die('No direct script access.');

class Model_Myuser extends ORM 
{

	protected $_table_name = 'users';
	protected $errors = array();

	//описание связей между таблицами
	protected $_has_many = array(
		'comments' => array(
			'model'       => 'comment',
			'foreign_key' => 'userid',
		),
	);
	//описание правил валидации
	public function rules()
	{
			return array(
				'username' => array(
				array('not_empty'),
				array(array($this, 'username_unique')),
				),
			);    
	}
	//проверка на уникальность имени пользователя	
	public function username_unique($username)
	{
            $db = Database::instance();

            if ($this->id)
            {
                $query =
                    'SELECT id
                    FROM users
                    WHERE id != '.$this->id.' AND email = '.$db->escape($username);
            }
            else
            {
                $query =
                    'SELECT id
                    FROM users
                    WHERE email = '.$db->escape($username);
            }

            $result = $db->query(Database::SELECT, $query, FALSE)->as_array();
            if (count($result) > 0)
            {
                    return FALSE;
            }
            else
            {
                    return TRUE;
            }
	}
	//вывод имени и электронной почты текущего пользователя	
	public function displayusername()
	{
		$nameemail = array();
		$auth = Auth::instance();
		$userId = $auth->get_user();

		$usertemp = ORM::factory('myuser', array('id'=>$userId));
		$nameemail['username'] = $usertemp->username;
		$nameemail['email'] = $usertemp->email;
		return $nameemail;
	}
	//получить имя пользователя по его id
	public function getUsernameById($userId)
	{

		$usertemp = ORM::factory('myuser', array('id'=>$userId));
		return $usertemp->username;
	}
	//получить id текущего пользователя
	public function getId()
	{
		$auth = Auth::instance();
		return $auth->get_user();
	}
	//проверка старого пароля при смене
	public function checkOldPass($oldpass)
	{
		$auth = Auth::instance();
		return $auth->check_password($oldpass);
	}
	//сохранение нового пароля
	public function saveNewPass($oldpass, $newpass1, $newpass2)
	{
		$vData = array("oldpass" => $oldpass, "newpass1" => $newpass1, "newpass2" => $newpass2,);

		$validation = Validation::factory($vData);
		//правила валидации для старого и нового паролей
        $validation->rule('oldpass', 'not_empty'); //не пустой
        $validation->rule('oldpass', 'alpha_numeric');//только буквы и цифры
        $validation->rule('oldpass', 'min_length', array(':value', '3'));//мин длина 3
        $validation->rule('oldpass', 'max_length', array(':value', '64'));//макс длина 64
		$validation->rule('oldpass', array($this, 'checkOldPass')); //существует ли
		$validation->rule('newpass1', 'not_empty');
        $validation->rule('newpass1', 'alpha_numeric');
        $validation->rule('newpass1', 'min_length', array(':value', '3'));//мин длина 3
        $validation->rule('newpass1', 'max_length', array(':value', '64'));//макс длина 64
		$validation->rule('newpass1', 'matches', array(':validation', 'newpass1', 'newpass2')); //совпадают ли пароли

		if(!$validation->check())
        {
			$this->errors = $validation->errors('catErrors');
			return FALSE;
        }

		$auth = Auth::instance();
		$userId = $auth->get_user();
		
		$usertemp = ORM::factory('myuser', array('id'=>$userId));
		//если нет ошибок хэшируем пароль и сохраняем
		$usertemp->password = $auth->hash_password($newpass1);
		$usertemp->save();

		return TRUE;
	}
	// изменение имени пользователя
	public function saveNewName($newname)
	{
		$vData1 = array("newname" => $newname,);

		$validation = Validation::factory($vData1);
		//проверка на не пустое поле и на то что только цифры и буквы
        $validation->rule('newname', 'not_empty');
        $validation->rule('newname', 'alpha_numeric');		

		if(!$validation->check())
        {
			$this->errors = $validation->errors('catErrors');
			return FALSE;
        }

		$auth = Auth::instance();
		$userId = $auth->get_user();
		//если нет ошибок изменяем поле
		$usertemp = ORM::factory('myuser', array('id'=>$userId));
		$usertemp->username = $newname;
		$usertemp->save();

		return TRUE;
	}
	//возвращает ошибки
	public function getErrors()
    {
        return $this->errors;
    }

}
