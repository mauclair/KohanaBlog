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

		$this->auto_render = FALSE; //не использовать главный шаблон вида "basic"

		$auth = Auth::instance();
		//если пользователь авторизован
		if($auth->logged_in())
		{
			//вывод формы добавления комментариев
			$this->response->body(View::factory('commentformloginview'));
		}
		else
		{
			//вывод текста запрещающего коментировать неавторизованным посетителям
			$this->response->body(View::factory('commentformlogoutview'));
		}
	}
	//контроллер показывающий комментарии пользователя по его id
	public function action_showcomments()
	{
		//получение id пользователя из url
		$userid = $this->request->param('id');
		$myuser = new Model_Myuser;
		//выборка имени пользователя
		$user = $myuser->displayusername();
		$commodel = new Model_Comment;
		//выборка комментариев по id пользователя
		$data = $commodel->getCommentsByUserid($userid);
		
		if ($data)
		{
			$data['show']['ok'] = 'good';
			//вывод комментариев пользователя
			
		}
		else
		{
			$data['show']['notok'] = 'bad';
			//нет комментариев у пользователя
			
		}
		$data['user']['id'] = $user['username'];
		$this->template->content =  View::factory('commentsview', $data);

	}
	//контроллер добавления комментариев
	public function action_insertcomment()
	{
		
		$data = array();
		$commodel = new Model_Comment;
		$material = new Model_Material;

		//получение из страницы (там записывается значение в сессию) с постом id этого поста
		$session = Session::instance();
		$mat_id = $session->get('mat_id');
		$session->delete('mat_id');
		
		$auth = Auth::instance();
		//получение id текущего пользователя
		$userId = $auth->get_user();
		//если нажата кнопка добавления комментария
		if(isset($_POST['btnsubmit']))
		{
			//получаем текст комментария из формы
			$textarea = Arr::get($_POST, 'text', '');
			//проверяем и записываем в базу комментарий
			if($commodel->saveNewComment($userId, $textarea, $mat_id))
			{
				$data['newmatok'] = '';
				//редирект на страницу с постом, к которому оставляется комментарий
				$this->request->redirect('materials/showcontent/'.$mat_id);
			}
			else
			{
				//если есть ошибки - выводим их
				$data['errors'] = $commodel->getErrors();
			}
		}
		$this->template->content =  View::factory('contentview', $data);
	}
	

}

	