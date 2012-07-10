<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Page extends Controller_Template_Layout {

	public function action_index()
	{
		$this->template->title = __('Welcome to kohana 3.2 Template');
  		
  		$this->template->content = View::factory('page/home');
	}

}
