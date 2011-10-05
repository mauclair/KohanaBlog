<?php defined('SYSPATH') or die('No direct script access.');

class Model_Tagsmaterial extends ORM
{

	//protected $_belongs_to = array('material' => array(), 'tag' => array());
	protected $_table_name = "tags_materials";

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