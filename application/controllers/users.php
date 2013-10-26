<?php 


class Users_Controller extends Base_Controller
{
	public $restful = true;

	public function get_index()
	{
		$title = ucwords(Auth::user()->username ."'s Profile Page");
		$photos = Auth::user()->photos()->order_by('created_at', 'desc')->order_by('id', 'desc')->get();

		return View::make('user.index')
			->with('title', $title)
			->with('photos', $photos);
	}

	public function get_register(){
		if(Auth::check()){
			return Redirect::to('search');
		}else{
			return View::make('pages.registration');
		}

	}

	public function post_register()
	{
		$input = Input::all();

		$rules = array(
			'username' => 'required',
			'email' => 'required|unique:users|email',
			'password' => 'required|Confirmed',
			'password_confirmation'=>'Required',
			'enroll' => 'required|numeric'
			);

		$v = Validator::make($input, $rules);

		if($v->fails()){
			return Redirect::to('register')->with_errors($v);
		} else {
			$password = $input['password'];
			$password = Hash::make($password);

			$user = new User;
			$user->name = $input['username'];
			$user->email = $input['email'];
			$user->password = $password;
			$user->enroll = $input['enroll'];
			$user->school = $input['school'];
			$user->save();
			Session::flash('success','Successfully Registered');
			return Redirect::to('/');
		}
	}

	public function post_login()
	{
		$input = Input::all();

		$rules = array('email' => 'required|email', 'password' => 'required');

		$v = Validator::make($input, $rules);

		if ($v->fails()){
			return Redirect::to('/')->with_errors($v);
		} else {
			$credentials = array('username' => $input['email'], 'password' => $input['password']);

			if(Auth::attempt($credentials)){
				Session::flash('success','Welcome to RopeTo4.3');
				return Redirect::to('search');
			} else {
				Session::flash('error','Invalid Login Credentials.');
				return Redirect::to('/');
			}
		}
	}

	public function get_logout()
	{
		Auth::logout();
		Session::flush();
		return Redirect::to('/');
	}

	public function post_edituser(){
		$userid = Input::get('userid');
		$user = User::find($userid);
		$user->name = Input::get('name');
		$user->enroll = Input::get('enroll');
		$user->school = Input::get('school');
		$user->save();

		return Redirect::to('plan/'.$user->id);
	}
}