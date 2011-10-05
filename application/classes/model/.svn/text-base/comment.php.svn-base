<?php defined('SYSPATH') or die('No direct script access.');

class Model_Comment extends ORM
{	

	protected $errors = array();

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

	public function countcomments($mat_id)
	{
		$commentcount = ORM::factory('comment')->where('materialid','=',$mat_id)->count_all();
		return $commentcount;
	}

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


	public function saveNewComment($userId, $textarea, $mat_id)
	{
		
        $vData['text'] = $textarea;
       
        $validation = Validation::factory($vData);
        $validation->rule('text', 'not_empty');
        $validation->rule('text', 'min_length', array(':value', '3'));
        if(!$validation->check())
        {
			$this->errors = $validation->errors('matErrors');
			return FALSE;
        } 
	
		$comment = ORM::factory('comment');
		$comment->userid = $userId;
		$comment->text = Security::xss_clean($textarea);
		$comment->materialid = $mat_id; // $comment->materials->id;
		$comment->save();

		return TRUE;
	}

	public function getErrors()
    {
        return $this->errors;
    }


}