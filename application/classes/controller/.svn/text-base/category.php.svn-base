<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Category extends Controller_Template
{
	public $template = 'basic';
	
	public function action_showcat()
	{
		$url = $this->request->param('id');
		
		$data = array();
		
		$tree = new Model_Tree();

		$data['category'] = $tree->categoryInfoByUrl($url);
		if(!$data['category'])
		{
			throw new HTTP_Exception_404('Запрашиваемая категория не найдена');
			return;
		}

		$data2 = $tree->contentСategoryById($data['category']['id']);
		$data2['category']['name'] = $data['category']['name'];
		$this->template->content =  View::factory('catview', $data2);
	}
}