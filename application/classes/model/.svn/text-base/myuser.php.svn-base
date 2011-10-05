<?php defined('SYSPATH') or die('No direct script access.');

class Model_Myuser extends ORM 
{

	protected $_table_name = 'users';
	protected $errors = array();

	protected $_has_many = array(
		'comments' => array(
			'model'       => 'comment',
			'foreign_key' => 'userid',
		),
	);

	public function rules()
	{
			return array(
				'username' => array(
				array('not_empty'),
				array('email'),
				array(array($this, 'username_unique')),
				),
			);    
	}
	
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

	public function getUsernameById($userId)
	{

		$usertemp = ORM::factory('myuser', array('id'=>$userId));
		return $usertemp->username;
	}

	public function getId()
	{
		$auth = Auth::instance();
		return $auth->get_user();
	}

	public function checkOldPass($oldpass)
	{
		$auth = Auth::instance();
		return $auth->check_password($oldpass);
	}

	public function saveNewPass($oldpass, $newpass1, $newpass2)
	{
		$vData = array("oldpass" => $oldpass, "newpass1" => $newpass1, "newpass2" => $newpass2,);

		$validation = Validation::factory($vData);
        $validation->rule('oldpass', 'not_empty');
        $validation->rule('oldpass', 'alpha_numeric');
		$validation->rule('oldpass', array($this, 'checkOldPass'));
		$validation->rule('newpass1', 'not_empty');
        $validation->rule('newpass1', 'alpha_numeric');
		$validation->rule('newpass1', 'matches', array(':validation', 'newpass1', 'newpass2'));

		if(!$validation->check())
        {
			$this->errors = $validation->errors('catErrors');
			return FALSE;
        }

		$auth = Auth::instance();
		$userId = $auth->get_user();
		
		$usertemp = ORM::factory('myuser', array('id'=>$userId));
		$usertemp->password = $auth->hash_password($newpass1);
		$usertemp->save();

		return TRUE;
	}

	public function saveNewName($newname)
	{
		$vData1 = array("newname" => $newname,);

		$validation = Validation::factory($vData1);
        $validation->rule('newname', 'not_empty');
        $validation->rule('newname', 'alpha_numeric');		

		if(!$validation->check())
        {
			$this->errors = $validation->errors('catErrors');
			return FALSE;
        }

		$auth = Auth::instance();
		$userId = $auth->get_user();
		
		$usertemp = ORM::factory('myuser', array('id'=>$userId));
		$usertemp->username = $newname;
		$usertemp->save();

		return TRUE;
	}

	public function getErrors()
    {
        return $this->errors;
    }

}
