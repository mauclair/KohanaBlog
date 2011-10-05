<?php defined('SYSPATH') or die('No direct script access.');

class Model_Comment extends ORM
{	

	protected $errors = array();
	//описание связей между таблицами
	protected $_belongs_to = array(
		'materials' => array(
			'model'       => 'material',
			'foreign_key' => 'materialid',
		),
		'users' => array(
			'model'       => 'myuser',
			'foreign_key' => 'userid',
			),
	);
	//подсчет комментариев для id статьи
	public function countcomments($mat_id)
	{
		$commentcount = ORM::factory('comment')->where('materialid','=',$mat_id)->count_all();
		return $commentcount;
	}
	//получение комментариев пользователя
	public function getCommentsByUserid($userid)
	{
		$comm = ORM::factory('comment')->where('userid','=',$userid)->find_all();
		$result = array();

		if (ORM::factory('comment')->where('userid','=',$userid)->count_all())
		{			
		 	foreach($comm as $comments)
		 	{
		 	$result['materialid'][] = $comments->materialid;
		 	$result['materialname'][] = $comments->materials->tree->name;
		 	$result['materialurl'][] = $comments->materials->tree->url;
		 	$result['mat_name'][] = $comments->materials->name;
		 	$result['text'][] = $comments->text;
		 	$result['ctime'][] = $comments->ctime;
		 	}
		 	return $result;
		 }
		 else
		 {
		 	return FALSE;
		 }
	}

	//проверка и запись нового комментария
	public function saveNewComment($userId, $textarea, $mat_id)
	{
		
        $vData['text'] = $textarea;
       
        $validation = Validation::factory($vData);
        $validation->rule('text', 'not_empty');// текст комментария не пустой
        $validation->rule('text', 'min_length', array(':value', '3'));//мин длина комментария 3
        if(!$validation->check())
        {
			$this->errors = $validation->errors('matErrors');
			return FALSE;
        } 
	
		$comment = ORM::factory('comment');
		$comment->userid = $userId;
		//проверка на XSS комментария
		$comment->text = Security::xss_clean($textarea);
		$comment->materialid = $mat_id; // $comment->materials->id;
		//если нет ошибок - сохранение
		$comment->save();

		return TRUE;
	}
	//возвращает ошибки
	public function getErrors()
    {
        return $this->errors;
    }


}