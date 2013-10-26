<?php

class Plans_Controller extends Base_Controller {
	// this woman is so stupid taht dunno how to copy and paste
	public $restful = true;
	/**
	 * Catch-all method for requests that can't be matched.
	 *
	 * @param  string    $method
	 * @param  array     $parameters
	 * @return Response
	 */
	public function post_addtoplan()
	{
		$user = Auth::user();
		$term = Input::get('term');
		$courseid = Input::get('courseid');
		$check = $user->plans()->where('course_id','=',$courseid)->get();
		if(sizeof($check) == 0){
			$plan = new Plan;
			$plan->course_id = $courseid;
			$plan->user_id = $user->id;
			$plan->term = $term;
			$plan->save();
			Session::flash('success','The course is added to your plan!');
		}else{
			Session::flash('error','You already added this course to your plan');
		}
		

		return Redirect::to('plan/'.$user->id);
	}

	public function get_view($userid){
		
		$plans = DB::query('select courses.id as `courseid`,plans.id as `planid`,`prof`,`enrolled`,courses.name as `coursename`,`term`,`likecounts`,`team_id` from courses join plans on courses.id = plans.course_id and user_id = ?',array($userid));
		$enrolled = array();
		$notenrolled = array();
		foreach($plans as $plan){
			if($plan->enrolled == 0){
				array_push($notenrolled,$plan);
			}else{
				array_push($enrolled, $plan);
			}
		}
		$user = User::find($userid);
		//return View::make('pages.try')->with('print',$enrolled);
		return View::make('pages.plan')->with('enrolledplans',$enrolled)
		->with('notenrolledplans',$notenrolled)
		->with('user',$user);
		
	}

	public function post_getthebid(){
		$planid = Input::get('planid');
		$plan = Plan::find($planid);
		//return View::make('pages.try')->with('print',$planid);
		$price = Input::get('price');
		$plan->enrolled = 1;
		$plan->bidprice = $price;
		$plan->save();

		return Redirect::to('plan/'.Auth::user()->id);
	}

	public function get_deletefromplan($planid){
		Plan::find($planid)->delete();

		return Redirect::to('plan/'.Auth::user()->id);
	}

}