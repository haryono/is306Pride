<?php

class Home_Controller extends Base_Controller {

	public $restful = true;

	public function get_index()
	{
		$title = "Pic Uploads";
		return View::make('home.index')
			->with('title', $title);
	}

}