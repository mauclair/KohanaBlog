<?php defined('SYSPATH') or die('No direct script access.');

class Model_Category
{
	protected $nstree;
    protected $tableName;
	protected $errors = array();

	//конструктор для записи переменной tablename;
	public function __construct($tableName)
    {
        $this->nstree = new NSTree($tableName);
        $this->tableName = $tableName;
    }

    //возврат дерева из класса nstree
	public function getTree()
    {
		return $this->nstree->getTree();
    }
	
	//проверка и вставка в базу новой категории
	public function catInsert($parentId, $data = array())
    {
        $data = Arr::extract($data, array('name', 'url'));
        $vData = $data;
        $vData['parentId'] = $parentId;
        //проверки для введенных данных
        $validation = Validation::factory($vData);
        $validation->rule('name', 'not_empty'); //назнание не пустое
        $validation->rule('name', 'alpha_numeric'); //в названии только буквы и цифры
        $validation->rule('name', 'min_length', array(':value', '3')); //минимальная длина 3
        $validation->rule('name', 'max_length', array(':value', '250')); //максимальная длина 250
        $validation->rule('parentId', 'check_id', array(':value', $this->tableName)); //check_id из valid.php
		$validation->rule('url', 'not_empty'); // не пустой адрем
		$validation->rule('url', 'alpha_numeric'); //в адресе только буквы и цифры
		$validation->rule('url', 'min_length', array(':value', '3')); //минимальная длина 3
		$validation->rule('url', 'max_length', array(':value', '200')); // макс длина 200
		$validation->rule('url', array($this, 'unique_url')); //адрес уникальный

        if(!$validation->check())
        {
			$this->errors = $validation->errors('catErrors');
			return FALSE;
        }
        //если нет ошибок вставка в дерево новой категории
		$this->nstree->insert($parentId, $data);
        return TRUE;
    }
    //возвращает ошибки
	public function getErrors()
    {
        return $this->errors;
    }
	//проверка на уникальность адреса категории
	public function unique_url($url)
	{
		return ! DB::select(array(DB::expr('COUNT(url)'), 'total'))
			->from($this->tableName)
			->where('url', '=', $url)
			->execute()
			->get('total');
	}
	//возврат категории по ее адресу
	public function getCategoryInfoByUrl($url)
	{
		$data = DB::select()
			->from($this->tableName)
			->where('url', '=', $url)
			->execute()
			->current();
		
			if (!isset($data['id'])) return FALSE;
			return $data;
	}
	
	
}