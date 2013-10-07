<?php  

class Photos_Controller extends Base_Controller
{
	public $restful = true;

	public function post_upload()
	{
		$input = Input::all();

		if(isset($input['description'])){
			$input['description'] = filter_var($input['description'], FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		}

		$rules = array(
			'photo' => 'required|image',
			'description' => 'required'
			); 

		$v = Validator::make($input, $rules);

		if($v->fails()){
			//return Redirect::to('noteventhere');
			return Redirect::to('profile')->with_errors($v);
		}

		$extension = File::extension($input['photo']['name']);
		$directory = path('public') .'uploads/'.sha1(Auth::user()->id);
		$filename = sha1(Auth::user()->id.time()).".{$extension}";

		$upload_success = Input::upload('photo', $directory, $filename);

		if ($upload_success){
			$photo = new Photo(array(
				'location' => URL::to_asset('uploads/'.sha1(Auth::user()->id).'/'.$filename),
				'description' => $input['description']
				));
			Auth::user()->photos()->insert($photo);
			Session::flash('status_success', 'You have successfully uploaded your new pic!');
			//return Redirect::to('successs');
		} else {
			Session::flash('status_error', 'An error has occured while uploading your pic -- Please Try Again!');
			//return Redirect::to('fail');
		}

		return Redirect::to('profile');
	}
}