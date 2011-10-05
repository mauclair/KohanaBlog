<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Materials extends Controller_Template
{
	public $template = 'basic';
	
	public function action_category()
	{
	 
	 $limit = 3; //change this to the number of results you want.
     $page_number = $this->request->param('page');
     $offset = $limit * ($page_number-1);
 	 $material = new Model_Material;
 	 $tag = new Model_Tag;

 	 $postinfo = $material->getMaterials($limit, $offset);
 	 $countall = $postinfo['count']['all'];
 	 $count = $countall % $limit;
 	 if ($count == 0) $count = $countall/$limit;
 	 else $count = ceil($countall/$limit);
 	 $postinfo['count']['all'] = $count;
 	 $this->template->content =  View::factory('home', $postinfo);	
	}

	public function action_showcontent()
	{
		$data = array();

		$id = $this->request->param('id');

		$session = Session::instance();
		$session->delete('mat_id');
		$session->set('mat_id', $id);

		$material = new Model_Material();

		$data = $material->showMaterialById($id);

		if(!$data)
		{
			throw new HTTP_Exception_404('Запрашиваемая статья не найдена');
			return;
		}

		$this->template->content =  View::factory('contentview', $data);
	}

	

}