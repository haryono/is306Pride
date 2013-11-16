<?php

class Invitation_Controller extends Base_Controller {

	public $restful = true;

	public function get_index()
	{
		Session::put('menu','invitation');
		$user = Auth::user();
		$invitation = Invitation::where('receiver_id','=',$user->id)->where('read','=',0)->join('courses','invitations.course_id','=','courses.id')->get();
		$myinvite = DB::query('select courses.name as `coursename`,users.name as `username`,`prof` from (select * from invitations where `sender_id` = ? ) as `invitations` join users on users.id = invitations.receiver_id join courses on invitations.course_id = courses.id order by invitations.created_at',array($user->id));
		//return View::make('pages.try')->with('print',$myinvite);
		//return View::make('pages.try')->with('print',$invitation[0]->id);
		return View::make('pages.team_invitation')->with('invitations',$invitation)
		->with('myinvite',$myinvite);
	}
	public function get_accept($invitationid){
		$invitation = Invitation::find($invitationid);
		$courseid = $invitation->course_id;
		$user = Auth::user();

		$teamid = $invitation->team_id;
		//$plan = Plan::where('user_id','=',$user->id)->where('course_id','=',$courseid)-
		$plan = $user->plans()->where('course_id','=',$courseid)->get();

		$plan[0]->team_id = $teamid;
		$plan[0]->save();
		$invitation->delete();

		return Redirect::to('teaminvite');
	}
	public function get_reject($invitationid){
		Invitation::find($invitationid)->delete();
		return Redirect::to('teaminvite');
	}

}