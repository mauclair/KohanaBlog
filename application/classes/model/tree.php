<?php defined('SYSPATH') or die('No direct script access.');

class Model_Tree extends ORM
{
	protected $_table_name = 'tree';

	protected $_has_many = array(
		'materials' => array(
			'model'       => 'material',
			'foreign_key' => 'category_id',
		),
	);

	public function categoryInfoByUrl($url)
	{
		$tree = ORM::factory('tree', array('url'=>$url));

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

	public function contentСategoryById($id)
	{
		$tree = ORM::factory('tree', array('id'=>$id));
		$useful = new Model_Useful;
		$commodel = new Model_Comment;

		if($tree->loaded())
		{
			$result = array();
			$taginfo['name']=array();
			$taginfo['id']=array();
			$res = $tree->materials->order_by('id', 'DESC')->find_all();

			foreach($res as $post)
			{
				$result['id'][] = $post->id;

				//$res2 = $tree->materials->tag->find_all();
				$res2 = ORM::factory('tree', array("id" => $id))->materials->tag->find_all();

				foreach($res2 as $item2)
				{
					$taginfo['name'][] = $item2->name;	
					$taginfo['id'][] = $item2->id;
				};
				//$result['categoryurl'][] = $post->tree->url;
			 	$result['name'][] = $post->name;
			 	$result['content'][] = $useful->preview($post->content);
				//$result['category'][] = $post->tree->name;
				$result['ctime'][] = $post->ctime;
				$result['countcom'][] = $commodel->countcomments($post->id);
				//$result['mtime'][] = $post->mtime;
				$result['tag'][] = $taginfo['name'];
				$result['tagid'][] = $taginfo['id'];
				for ($i=0; $i<sizeof($taginfo['name']); $i++)
				{
					$taginfo['name'][$i]=NULL;
					//$taginfo['id'][$i]=NULL;	
				}

			}
			
			return $result;
		}
		else
		{
			return FALSE;
		}
	}
}