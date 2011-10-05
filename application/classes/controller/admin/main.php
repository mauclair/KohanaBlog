<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Main extends Mycontrolleradmin
{
	public $template = 'basic';
	
    public function action_index()
	{
		$category = new Model_Category('tree');

		//выборка всех категорий из дерева
		$data['categories'] = $category->getTree();

		//если нажата кнопка добавления новой категории
		if(isset($_POST['btnsubmit']))
		{
			//принимаем значения названия и url категории, id родительской категории из формы
			$categoryName = Arr::get($_POST, 'categoryName', '');
			$parentId = Arr::get($_POST, 'parentId', '');
			$url = Arr::get($_POST, 'url', '');

			//проверка и вставка новой категории
			$res = $category->catInsert($parentId, array('name'=>$categoryName, 'url'=>$url));               
			//если успешно - редирект на админку
			if($res)
			{
				Request::initial()->redirect('admin');
			}
			//если есть ошибки - вывести ошибки
			else
			{
				$data['errors'] = $category->getErrors();
			}
		}
		//если нажата кнопка добавления нового поста
		if(isset($_POST['materialsavebtn']))
		{
			//получаем id категории, тело поста, заголовок поста, тэги из формы
			$categoryId = Arr::get($_POST, 'categoryId', '');
			$content = Arr::get($_POST, 'content', '');
			$name = Arr::get($_POST, 'name', '');
			$tags = Arr::get($_POST, 'tags', '');

			$material = ORM::factory('material');
			//проверка и добаление нового поста	
			$res = $material->addMaterial($categoryId, $content, $name, $tags);
			//если успешно - редирект на админку
			if($res)
			{
				Request::initial()->redirect('admin');
			}
			//если есть ошибки - вывести ошибки
			else
			{
				$data['errors'] = $material->getErrors();
			}
		}
		//вывод массива в отображение
		$this->template->content =  View::factory('adminview', $data);
	}

}
