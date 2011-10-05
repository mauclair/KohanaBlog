<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Netprav extends Mycontroller {

	public $template = 'basic';
	// контроллер обрабатывает действия при попытке зайти в администраторскую не админа
	public function action_index()
	{
		$this->template->content =  View::factory('netpravview');
	}

}
