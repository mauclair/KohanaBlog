<?php defined('SYSPATH') or die('No direct script access.');

class Model_Tagsmaterial extends ORM
{

	protected $_table_name = "tags_materials";
	//вставляет запись в таблицу с указанием связи между статьей и тэгами
	public function insertarray($mat_id, $tag_ids)
	{
		
		for ($i=0; $i<count($tag_ids); $i++)
		{
			$tm = ORM::factory('tagsmaterial');

			$tm->tag_id = $tag_ids[$i];
			$tm->material_id = $mat_id;
			$tm->save();
		}
	}
	
}