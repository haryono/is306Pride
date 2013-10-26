<?php

class Flows_Controller extends Base_Controller {

	public $restful = true;

	public function get_index()
	{
		if(Auth::check()){
			return Redirect::to('search');
		}else{
			Session::forget('menu');
			return View::make('pages.start');
		}		
	}

	public function post_login()
	{
		Session::put('menu','search');
		return View::make('pages.search');
	}


	public function get_search()
	{
		Session::put('menu','search');
		return View::make('pages.search');
	}

	public function get_searchresult()
	{
		Session::put('menu','search');
		return View::make('pages.search_results');
	}

	public function get_plan($userid)
	{
		Session::put('menu','plan');
		return View::make('pages.plan');
	}

	public function get_learnmore(){
		return View::make('pages.learn_more');
	}

	public function get_invite(){
		return View::make('pages.invite');
	}

	public function get_register(){
		return View::make('pages.registration');
	}

	public function get_teamsearch(){
		return View::make('pages.teammate_search');
	}

	public function get_teamsearchresults(){
		return View::make('pages.teammate_search_results');
	}

	public function get_teaminvite(){
		Session::put('menu','invitation');
		return View::make('pages.team_invitation');
	}


}