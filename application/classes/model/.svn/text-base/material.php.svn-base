<?php defined('SYSPATH') or die('No direct script access.');

class Model_Material extends ORM
{	

	protected $errors = array();

	protected $_belongs_to = array(
		'tree' => array(
			'foreign_key' => 'category_id',
		),
	);

	protected $_has_many = array(
		'tag' => array(
			'model' => 'tag',
			'through' => 'tags_materials',
		),
		'comment' => array(
			'model'       => 'comment',
			'foreign_key' => 'materialid',
		),
	);

	public function getMaterialsByCategory($category_id)
	{
		return DB::select()
			->from('materials')
			->where('category_id', '=', $category_id)
			->execute()
			->as_array();
	}

	public function getMaterials($limit, $offset)
	{
		$taginfo['name']=array();
		$taginfo['id']=array();

		$useful = new Model_Useful;
		$commodel = new Model_Comment;
		$material = ORM::factory('material')->order_by('id', 'DESC')->limit($limit)->offset($offset)->find_all();
		foreach($material as $post)
	 	{
	 	$result['id'][] = $post->id;
	 	$tags = ORM::factory('material', array("id" => $post->id))->tag->find_all();
	 	foreach($tags as $item)
			{
				$taginfo['name'][] = $item->name;	
				$taginfo['id'][] = $item->url;
			}
		$result['categoryurl'][] = $post->tree->url;
	 	$result['name'][] = $post->name;
	 	$result['content'][] = $useful->preview($post->content);
		$result['category'][] = $post->tree->name;
		$result['ctime'][] = $post->ctime;
		$result['mtime'][] = $post->mtime;
		$result['tag'][] = $taginfo['name'];
		$result['tagid'][] = $taginfo['id'];
		$result['countcom'][] = $commodel->countcomments($post->id);
		for ($i=0; $i<sizeof($taginfo['name']); $i++)
		{
			$taginfo['name'][$i]=NULL;
			//$taginfo['id'][$i]=NULL;	
		}

	 	}
	 	$result['count']['all'] = ORM::factory('material')->count_all();
	 	return $result;
	}
	
	public function addMaterial($categoryId, $content, $name, $tags)
	{
        $vData['tags'] = $tags;
        $vData['name'] = $name;
        $vData['content'] = $content;
        $validation = Validation::factory($vData);
        $validation->rule('name', 'not_empty');
        $validation->rule('name', 'min_length', array(':value', '3'));
        $validation->rule('name', 'max_length', array(':value', '100'));
		$validation->rule('tags', 'not_empty');
		$validation->rule('content', 'not_empty');
		$validation->rule('content', 'min_length', array(':value', '100'));
		//$validation->rule('tags', 'min_length', array(':value', '2'));
        //$validation->rule('tags', 'max_length', array(':value', '100'));

        if(!$validation->check())
        {
			$this->errors = $validation->errors('matErrors');
			return FALSE;
        }        

		$this->category_id = $categoryId;
		$this->content = Security::xss_clean($content);
		$this->name = Security::xss_clean($name);
		$this->save();

		$tags_array = explode(",", $tags);		
		$tagmodel = new Model_Tag;
		$tag_ids = $tagmodel->addTag($tags_array);
		$link = new Model_Tagsmaterial;
		$mat_id = ORM::factory('material', array('name' => $name))->id;
		$link->insertarray($mat_id, $tag_ids);

		return TRUE;		
	}

	public function showMaterialById($id)
	{
		$useful = new Model_Useful;
		$commodel = new Model_Comment;
		$usermodel = new Model_Myuser;
		 $material = ORM::factory('material', array('id'=>$id));
		 $taginfo = array();
		 $cominfo = array();

		 if($material->loaded())
		 {
			$res = $material->tag->find_all();
			$comres = $material->comment->find_all();

			foreach($comres as $com)
			{
				$cominfo[] = array('userid' => $usermodel->getUsernameById($com->userid), 'text' => $com->text, 'ctime' => $com->ctime);
			}

			foreach($res as $item)
			{
				$taginfo[] = array('name' => $item->name, 'id' => $item->url);
			}
			$result['id'] = $material->id;
			$result['ctime'] = $material->ctime;
			$result['content'] = $useful->removeCutTag($material->content);
			$result['name'] = $material->name;
			$result['category'] = $material->tree->name;
			$result['categoryurl'] = $material->tree->url;
			$result['tag'] = $taginfo;
			$result['comment'] = $cominfo;
			$result['count'] = $commodel->countcomments($material->id);

			return $result;
		 }
		 else
		 {
			return FALSE;
		 }
	}

	public function getErrors()
    {
        return $this->errors;
    }


}