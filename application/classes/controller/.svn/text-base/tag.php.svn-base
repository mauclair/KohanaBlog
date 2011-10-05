<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Tag extends Controller_Template
{
	public $template = 'basic';
	//контроллер выводящий материалы соответствующие имени тэга
	public function action_showtag()
	{
		//получаем имя тэга из url
		$url = $this->request->param('id');
		
		$data = array();
		
		$tag = new Model_Tag();
		//получаем информацию о тэге по url
		$data['tag'] = $tag->tagInfoByUrl($url);
		if(!$data['tag'])
		{
			throw new HTTP_Exception_404('Запрашиваемый тег не найден!');
			return;
		}
		//получаем статьи, соответствующие id тэга
		$data['materials'] = $tag->contentTagById($data['tag']['id']);
		//вывод статей в отображение
		$this->template->content =  View::factory('tagview', $data);
	}

}