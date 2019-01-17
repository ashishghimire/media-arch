<?php
Route::group([

	'namespace' => 'CMS',
], function () {

	Route::get('about1', 'About1Controller@index')->name('about1');
	Route::get('about1/create', 'About1Controller@create')->name('about1.create');
	Route::post('about1/store', 'About1Controller@store')->name('about1.store');
	Route::get('about1/{id}/edit', 'About1Controller@edit')->name('about1.edit');
	Route::delete('about1/{id}/delete', 'About1Controller@delete')->name('about1.delete');
	Route::patch('about1/{id}', 'About1Controller@update')->name('about1.update');
	Route::get('about1/{id}', 'About1Controller@show');

});