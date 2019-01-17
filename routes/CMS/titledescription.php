<?php
Route::group([

	'namespace' => 'CMS',
], function () {

	Route::get('titledescription', 'TitleDescriptionController@index')->name('titledescription');
	Route::get('titledescription/create', 'TitleDescriptionController@create')->name('titledescription.create');
	Route::post('titledescription/store', 'TitleDescriptionController@store')->name('titledescription.store');
	Route::get('titledescription/{id}/edit', 'TitleDescriptionController@edit')->name('titledescription.edit');
	Route::delete('titledescription/{id}/delete', 'TitleDescriptionController@delete')->name('titledescription.delete');
	Route::patch('titledescription/{id}', 'TitleDescriptionController@update')->name('titledescription.update');
	Route::get('titledescription/{id}', 'TitleDescriptionController@show');

});