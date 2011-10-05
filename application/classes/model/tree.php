<?php defined('SYSPATH') or die('No direct script access.');

class Model_Tree extends ORM
{
	protected $_table_name = 'tree';
	//указание связей между таблицами
	protected $_has_many = array(
		'materials' => array(
			'model'       => 'material',
			'foreign_key' => 'category_id',
		),
	);
	//выборка категории по ее url
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
	//вывод статей, принадлежащий категории с id = $id
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
			//выборка по убыванию
			$res = $tree->materials->order_by('id', 'DESC')->find_all();

			foreach($res as $post)
			{
				$result['id'][] = $post->id;
				$res2 = ORM::factory('tree', array("id" => $id))->materials->tag->find_all();

				foreach($res2 as $item2)
				{
					$taginfo['name'][] = $item2->name;	
					$taginfo['id'][] = $item2->id;
				};
			 	$result['name'][] = $post->name;
			 	$result['content'][] = $useful->preview($post->content); //вывод статьи до ката
				$result['ctime'][] = $post->ctime;
				$result['countcom'][] = $commodel->countcomments($post->id);//подсчет комментариев
				$result['tag'][] = $taginfo['name'];
				$result['tagid'][] = $taginfo['id'];
				//обнуление в цикле имен тэгов для перезаписи
				for ($i=0; $i<sizeof($taginfo['name']); $i++)
				{
					$taginfo['name'][$i]=NULL;	
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