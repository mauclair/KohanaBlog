<?php defined('SYSPATH') or die('No direct script access.');

class Model_Tag extends ORM
{

	protected $_has_many = array(
		'material' => array(
			'model'   => 'material',
			'through' => 'tags_materials',
		),
	);
	
	public function getTagsbytagid($tagid)
	{
		$tags = ORM::factory('tag', array("id" => $tagid));
	 	$result['tagname'] = $post->name;
	 	$result['tagurl'] = $post->url;
		$result['tagid'] = $post->id;
	 	return $result;
	}

	public function tagInfoByUrl($url)
	{
		$tree = ORM::factory('tag', array('url'=>$url));

		if($tree->loaded())
		{
			$result['id'] = $tree->id;
			$result['name'] = $tree->name;
			
			return $result;
		}
		else
		{
			return FALSE;
		}
	}

	public function contentTagById($id)
	{
		$tag = ORM::factory('tag', array('id'=>$id));
		$commodel = new Model_Comment;

		if($tag->loaded())
		{
			$result = array();
			$res = $tag->material->order_by('id', 'DESC')->find_all();

			foreach($res as $item)
			{
				$result[] = array('id' => $item->id, 'content' => $item->content, 'name' => $item->name, 'ctime' => $item->ctime, 'catname' => $item->tree->name, 'caturl' => $item->tree->url, 'catcount' => $commodel->countcomments($item->id));
			}
			return $result;
		}
		else
		{
			return FALSE;
		}
	}

	public function addTag($tag_array)
	{
		$tag_ids = array();
		for ($i=0;$i<count($tag_array);$i++)
		{
			$tags = ORM::factory('tag');
			$tags_where = $tags->where('name','=',$tag_array[$i])->find_all();
			$tagscount = $tags->where('name','=',$tag_array[$i])->count_all();
		
			if ($tagscount  == 0)
			{				
				$tags->name = $tag_array[$i];
				$tags->url = $tag_array[$i];
				$tags->save();
				$tag_ids[] = $tags->id;
			}
			else
			{
				$tags = ORM::factory('tag')->where('name','=',$tag_array[$i])->find();
				$tag_ids[] = $tags->id;				
			}
			
		}
		return $tag_ids;
	}
	
}