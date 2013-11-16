<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Simply tell Laravel the HTTP verbs and URIs it should respond to. It is a
| breeze to setup your application using Laravel's RESTful routing and it
| is perfectly suited for building large applications and simple APIs.
|
| Let's respond to a simple GET request to http://example.com/hello:
|
|		Route::get('hello', function()
|		{
|			return 'Hello World!';
|		});
|
| You can even respond to more than one URI:
|
|		Route::post(array('hello', 'world'), function()
|		{
|			return 'Hello World!';
|		});
|
| It's easy to allow URI wildcards using (:num) or (:any):
|
|		Route::put('hello/(:any)', function($name)
|		{
|			return "Welcome, $name.";
|		});
|
*/

// Users controllers
Route::get('/', 'flows@index');
Route::post('/', 'users@login');
Route::get('register','users@register');
Route::post('register','users@register');
Route::get('logout','users@logout');
Route::post('edituser','users@edituser');
//comments controllers
Route::post('addcomment','comments@addcomment');

// Invitation controller
Route::get('teaminvite','invitation@index');
Route::get('accept/(:num)','invitation@accept');
Route::get('reject/(:num)','invitation@reject');//invitation id
// Course search controllers
Route::get('search', 'courses@search');
Route::post('search', 'courses@search');
Route::get('searchresult', 'flows@searchresult');
Route::get('recommend/(:any)','courses@recommend');

// Plan controller
Route::get('plan/(:any)', 'plans@view'); //uaerid
Route::post('addtoplan','plans@addtoplan');
Route::get('learnmore/(:any)','courses@learnmore');
Route::get('invite/(:num)/(:num)','team@invite');//courseid userid
Route::get('deletefromplan/(:any)','plans@deletefromplan');//planid
//Route::get('teamsearch','flows@teamsearch');
//Route::get('teamsearchresults','flows@teamsearchresults');
Route::post('teamsearch','team@teamsearch'); //courseid, userid

Route::post('getthebid','plans@getthebid'); //plan id
Route::get('try',array(function(){
	return View::make('pages.try');
}));
/*
Route::get('/', 'home@index');
Route::post('/', 'users@login');

Route::get('register', 'users@create');
Route::post('register', 'users@create');

Route::post('upload', 'photos@upload');

Route::get('profile', 'users@index');
Route::get('logout', 'users@logout');
*/


/*
|--------------------------------------------------------------------------
| Application 404 & 500 Error Handlers
|--------------------------------------------------------------------------
|
| To centralize and simplify 404 handling, Laravel uses an awesome event
| system to retrieve the response. Feel free to modify this function to
| your tastes and the needs of your application.
|
| Similarly, we use an event to handle the display of 500 level errors
| within the application. These errors are fired when there is an
| uncaught exception thrown in the application. The exception object
| that is captured during execution is then passed to the 500 listener.
|
*/

Event::listen('404', function()
{
	return Response::error('404');
});

Event::listen('500', function($exception)
{
	return Response::error('500');
});

/*
|--------------------------------------------------------------------------
| Route Filters
|--------------------------------------------------------------------------
|
| Filters provide a convenient method for attaching functionality to your
| routes. The built-in before and after filters are called before and
| after every request to your application, and you may even create
| other filters that can be attached to individual routes.
|
| Let's walk through an example...
|
| First, define a filter:
|
|		Route::filter('filter', function()
|		{
|			return 'Filtered!';
|		});
|
| Next, attach the filter to a route:
|
|		Route::get('/', array('before' => 'filter', function()
|		{
|			return 'Hello World!';
|		}));
|
*/

Route::filter('before', function()
{
	// Do stuff before every request to your application...
});

Route::filter('after', function($response)
{
	// Do stuff after every request to your application...
});

Route::filter('csrf', function()
{
	if (Request::forged()) return Response::error('500');
});

Route::filter('auth', function()
{
	if (Auth::guest()) return Redirect::to('login');
});

// Route for Listings_Controller
//Route::controller('listings');
