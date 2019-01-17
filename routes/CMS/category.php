<?php
Route::group([

	'namespace' => 'CMS',
], function () {
	Route::get('category/index', 'CategoryController@index')->name('category');
	Route::get('category/create', 'CategoryController@create')->name('category.create');
	Route::post('category/store', 'CategoryController@store')->name('category.store');
	Route::get('category/{id}/edit', 'CategoryController@edit')->name('category.edit');
	Route::patch('category/{id}', 'CategoryController@update')->name('category.update');

});