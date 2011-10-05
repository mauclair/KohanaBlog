<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Materials extends Controller_Template
{
	public $template = 'basic';
	
	public function action_category()
	{
	 
	 $limit = 3; //количество выдаваемых статей
     $page_number = $this->request->param('page'); //получаем номер страницы из url
     $offset = $limit * ($page_number-1); //смещение для выборки из базы
 	 $material = new Model_Material;
 	 $tag = new Model_Tag;
 	 //загрузка материалов с лимитом и смещением
 	 $postinfo = $material->getMaterials($limit, $offset);
 	 //загрузка общего количества постов в базе
 	 $countall = $postinfo['count']['all'];
 	 //находим количество отображаемых цифр в пагинации
 	 $count = $countall % $limit;
 	 if ($count == 0) $count = $countall/$limit;
 	 else $count = ceil($countall/$limit);
 	 $postinfo['count']['all'] = $count;
 	 //вывод на главную страницу
 	 $this->template->content =  View::factory('home', $postinfo);	
	}
	//контроллер показывающий статью по ее id
	public function action_showcontent()
	{
		$data = array();
		//получаем id статьи из url
		$id = $this->request->param('id');
		//записываем в сессию id статьи
		$session = Session::instance();
		$session->delete('mat_id');
		$session->set('mat_id', $id);

		$material = new Model_Material();
		//выборка из базы информации по статье
		$data = $material->showMaterialById($id);

		if(!$data)
		{
			throw new HTTP_Exception_404('Запрашиваемая статья не найдена');
			return;
		}
		//вывод статьи в отображение
		$this->template->content =  View::factory('contentview', $data);
	}

	

}