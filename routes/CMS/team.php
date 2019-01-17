<?php
Route::group([

	'namespace' => 'CMS',
], function () {

	Route::get('team', 'TeamController@index')->name('team');
	Route::get('team/create', 'TeamController@create')->name('team.create');
	Route::post('team/store', 'TeamController@store')->name('team.store');
	Route::get('team/{id}/edit', 'TeamController@edit')->name('team.edit');
	Route::delete('team/{id}/delete', 'TeamController@delete')->name('team.delete');
	Route::patch('team/{id}', 'TeamController@update')->name('team.update');
	Route::get('team/{id}', 'TeamController@show');

});