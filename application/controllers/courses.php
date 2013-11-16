<?php

class Courses_Controller extends Base_Controller {

	public $restful = true;

	public function get_search()
	{
		Session::put('menu','search');
		$courses = Course::order_by('coursecode','asc')->get();
		return View::make('pages.search')->with('courses',$courses);
	}
	public function post_search(){
		Session::forget('error');
		$input = Input::get('search');
		$courses= Course::where('name', 'like', '%'.$input.'%')
		->or_where('coursecode', 'like', '%'.$input.'%')
		->or_where('prof','like','%'.$input.'%')
		->order_by('name', 'asc')->get();
		
		if(sizeof($courses) == 0){
			Session::flash('error','No matching result found');}
			
		Session::put('menu','search');
		return View::make('pages.search_results')
		->with('courses', $courses);
	}

	public function get_learnmore($courseid){
		$course = Course::find($courseid);
		$prof = Prof::find($course->prof_id);
		$comments = $course->comments()->order_by('created_at','desc')->get();
		$avgprice = DB::query('select avg(`bidprice`) as `avgprice` from `plans` where `course_id` = ?',array($courseid));
		//return View::make('pages.try')->with('print',$avgprice[0]->avgprice);
		$planned = Auth::user()->plans()->where('course_id','=',$courseid)->get();
		//return View::make('pages.try')->with('print',$planned);
		return View::make('pages.learn_more')
		->with('course',$course)
		->with('prof',$prof)
		->with('comments',$comments)
		->with('avgprice',$avgprice[0]->avgprice)
		->with('planned',$planned);
	}

	public function get_recommend($courseid){
		$userid = Auth::user()->id;
		$course = Course::find($courseid);
		$checklike = Plan::where('user_id','=',$userid)
		->where('course_id','=',$courseid)
		->where('enrolled','=',1)
		->where('liked','=',0)->get();
		
		if(sizeof($checklike) != 0){
			$recommendcount = $course->likecounts;
			$course->likecounts = $recommendcount+1;
			$course->save();
			foreach($checklike as $ck){
				$ck->liked = 1;
				$ck->save();
			}
			
			Session::flash('success','You recommend this prof and course');
		}else{
			Session::flash('error','You cannot recommend this prof, reason can be either you recommended already or you didnot enroll this course');
		}
		return Redirect::to('learnmore/'.$courseid);		

	}

}