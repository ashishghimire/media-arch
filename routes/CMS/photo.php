<?php
Route::group([

	'namespace' => 'CMS',
], function () {

	Route::get('photo', 'PhotoController@index')->name('photo');
	Route::get('photo/create', 'PhotoController@create')->name('photo.create');
	Route::post('photo/store', 'PhotoController@store')->name('photo.store');
	Route::get('photo/{id}/edit', 'PhotoController@edit')->name('photo.edit');
	Route::delete('photo/{id}/delete', 'PhotoController@delete')->name('photo.delete');
	Route::patch('photo/{id}', 'PhotoController@update')->name('photo.update');
	Route::get('photo/{id}', 'PhotoController@show');

});