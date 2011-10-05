<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Category extends Controller_Template
{
	public $template = 'basic';
	
	//контроллер показывающий материалы соответствующие названию категории в url
	public function action_showcat()
	{
		//получаем url категории из адресной строки
		$url = $this->request->param('id');
		
		$data = array();
		
		$tree = new Model_Tree();
		//получаем информацию о категории по ее url
		$data['category'] = $tree->categoryInfoByUrl($url);
		if(!$data['category'])
		{
			throw new HTTP_Exception_404('Запрашиваемая категория не найдена');
			return;
		}
		//получаем материалы соответствующие категории
		$data2 = $tree->contentСategoryById($data['category']['id']);
		$data2['category']['name'] = $data['category']['name'];
		$this->template->content =  View::factory('catview', $data2);
	}
}