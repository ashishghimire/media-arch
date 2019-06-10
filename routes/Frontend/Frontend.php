<?php

/**
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', 'FrontendController@index')->name('index');
Route::get('aboutus', 'FrontendController@aboutus')->name('aboutus');
Route::get('teams', 'FrontendController@team')->name('teams');
Route::get('portfolio', 'FrontendController@portfolio')->name('portfolio');
Route::get('service', 'FrontendController@service')->name('service');
Route::get('news', 'FrontendController@news')->name('news');
Route::get('singlepagenews/{id}', 'FrontendController@singlepagenews')->name('singlepagenews');


Route::get('category/{id}/edit', 'FrontendController@edit')->name('category.edit');

Route::get('showblogbycategory/{id}', 'FrontendController@showblogbycategory');
Route::get('showcatbyblog/{id}', 'FrontendController@showcatbyblog');
Route::post('contact', 'FrontendController@contact')->name('contact');
Route::get('macros', 'FrontendController@macros')->name('macros');
Route::get('fashion/{id}', 'FrontendController@fashion')->name('fashion');
Route::get('education/{id}', 'FrontendController@education')->name('education');
Route::get('singlepage/{id}', 'FrontendController@singlepage')->name('singlepge');
Route::get('singlepage1/{id}', 'FrontendController@singlepage1')->name('singlepge1');

/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 */
Route::group(['middleware' => 'auth'], function () {
	Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
		/*
			         * User Dashboard Specific
		*/
		Route::get('dashboard', 'DashboardController@index')->name('dashboard');

		/*
			         * User Account Specific
		*/
		Route::get('account', 'AccountController@index')->name('account');

		/*
			         * User Profile Specific
		*/
		Route::patch('profile/update', 'ProfileController@update')->name('profile.update');
	});
});
