<?php

class Comments_Controller extends Controller {

	public $restful = true;
	public function post_addcomment()
	{
		$input = Input::all();
		$rules = array(
			'comment' => 'required',
			'anonymous'=>'required',
		);
		$v = Validator::make($input, $rules);
		if ($v->fails()) {
			return Redirect::to('learnmore/'.Input::get('courseid'))->with_errors($v);	
		} else {
			$comment = new Comment();
			$comment->user_id = Auth::user()->id;
			$comment->course_id = Input::get('courseid');
			$comment->message = Input::get('comment');
			$check =  Input::get('anonymous');
			if($check=='no')
				$comment->user_name = Auth::user()->name;
			else{
				$comment->user_name = 'Unknown';
			}
			$comment->save();
			return Redirect::to('learnmore/'.Input::get('courseid'));
		}
	}

}
