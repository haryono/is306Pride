<?php

class Courses_Controller extends Base_Controller {

	public $restful = true;

	public function get_search()
	{
		Session::put('menu','search');
		return View::make('pages.search');
	}
	public function post_search(){
		$input = Input::get('search');
		$courses= Course::where('name', 'like', '%'.$input.'%')
		->or_where('coursecode', 'like', '%'.$input.'%')
		->order_by('name', 'asc')->get();
		
		if(sizeof($courses) == 0){
			Session::flash('error','No matching result found');
		}
			
		Session::put('menu','search');
		return View::make('pages.search_results')
		->with('courses', $courses);
	}


}