<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Comments extends Controller_Template {

	public $template = 'basic';
	
	public function action_index()
	{
		//Закрываем доступ к контроллеру первичным зарпосам
		if($this->request->is_initial())
		{
			throw new HTTP_Exception_404('File not found!');
		}

		$this->auto_render = FALSE; //не использовать главный шаблон вида "bacis"

		$auth = Auth::instance();
		if($auth->logged_in())
		{
			$this->response->body(View::factory('commentformloginview'));
		}
		else
		{
			$this->response->body(View::factory('commentformlogoutview'));
		}
	}

	public function action_showcomments()
	{

		$userid = $this->request->param('id');
		$myuser = new Model_Myuser;
		$user = $myuser->displayusername();
		$commodel = new Model_Comment;
		$data = $commodel->getCommentsByUserid($userid);
		
		if ($data)
		{
			$data['show']['ok'] = 'good';
			
		}
		else
		{
			$data['show']['notok'] = 'bad';//no in data
			
		}
		$data['user']['id'] = $user['username'];
		$this->template->content =  View::factory('commentsview', $data);

	}

	public function action_insertcomment()
	{
		
		$data = array();
		$commodel = new Model_Comment;
		$material = new Model_Material;

		$session = Session::instance();
		$mat_id = $session->get('mat_id');
		$session->delete('mat_id');
		
		//var_dump($mat_id);
		$auth = Auth::instance();
		$userId = $auth->get_user();

		if(isset($_POST['btnsubmit']))
		{
			$textarea = Arr::get($_POST, 'text', '');
			
			if($commodel->saveNewComment($userId, $textarea, $mat_id))
			{
				$data['newmatok'] = '';
				$this->request->redirect('materials/showcontent/'.$mat_id);
			}
			else
			{
				$data['errors'] = $commodel->getErrors();
			}
		}
		$this->template->content =  View::factory('contentview', $data);
	}
	

}

	