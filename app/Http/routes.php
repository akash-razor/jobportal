<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


//Route::get('/reg', 'Auth\AuthController@register');

Route::auth();

Route::get('/home', 'HomeController@index');

//Route::resource('/user/create', 'UserController@create');
//
//Route::resource('/user/edit', 'UserController@edit');

Route::get('/user/show', 'UserController@show');

Route::resource('user', 'UserController', ['except'=>['edit', 'create', 'store', 'update', 'destroy', 'show']]);

Route::post('/company/create', 'CompanyController@store');

Route::post('/applicant/create', 'ApplicantController@store');

Route::get('/jobs/{job}/apply', 'JobController@apply');

Route::get('/jobs/{job}/applicants', 'JobController@applicants');

Route::get('/user/create_job', 'UserController@create_job');

Route::post('/jobs/create', 'JobController@store');

Route::get('/user/search', 'UserController@search');

Route::get('/user/applied_jobs', 'ApplicantController@applied');

Route::get('/jobs/{id}/delete', 'JobController@delete');

Route::get('/jobs/{id}/edit', 'JobController@edit');

Route::put('/jobs/{id}/edit', 'JobController@update');

//Route::get('/entity', function(){
//   return Auth::user()->entity;
//});
