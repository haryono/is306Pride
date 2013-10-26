<?php

class Team_Controller extends Base_Controller {

	public $restful = true;

	public function post_teamsearch()
	{
		$courseid = Input::get('courseid');
		$term = Input::get('searchterm');
		$course = Course::find($courseid);
		$userid = Auth::user()->id;
		$students = Plan::where('course_id','=',$courseid)->where('term','=',$term)->join('users','users.id','=','plans.user_id')->get();
		$ownplan = Auth::user()->plans()->where('course_id','=',$courseid)->where('term','=',$term)->get();
		$invitations = Invitation::where('course_id','=',$courseid)->where('sender_id','=',$userid)->lists('receiver_id','id');
		$invitesender = Invitation::where('receiver_id','=',$userid)->where('course_id','=',$courseid)->lists('sender_id','id');
		//return View::make('pages.try')->with('print',sizeof($ownplan));
		if(sizeof($students) == 1 && sizeof($ownplan) == 1){
			Session::flash('error','No one available for invite');
		}elseif(sizeof($students) == 0){
			Session::flash('error','No one bid for this course this term yet');
		}
		//return View::make('pages.try')->with('print',$invitesender);
		return View::make('pages.teammate_search')->with('students',$students)->with('course',$course)->with('userid',$userid)->with('ownplan',$ownplan)->with('checkinvite',$invitations)->with('selectedterm',$term)->with('checksender',$invitesender);
	}

	public function get_invite($courseid,$receiver){
		$userid = Auth::user()->id;
		$plan = Plan::where('user_id','=',$userid)
			->where('course_id','=',$courseid)->get();
			//return View::make('pages.try')->with('print',$plan);
		if(sizeof($plan) == 0){
			Session::flash('error','You need to add this course to your plan before you can invite classmate');
			return Redirect::to('teamsearch/'.$courseid.'/'.$userid);
		}else{
			if($plan[0]->team_id == null){
			$team = new Team;
			$team->course_id = $courseid;
			$team->save();
			$plan[0]->team_id = $team->id;
			$plan[0]->save();
		}
		$invitation = new Invitation;
		$invitation->sender_id = $userid;
		$invitation->receiver_id = $receiver;
		$invitation->team_id = $plan[0]->team_id;
		$invitation->course_id = $courseid;
		$invitation->save();
		Session::flash('success','Invitation successfully sent');
		return Redirect::to('teaminvite');
		}

		
	}
}