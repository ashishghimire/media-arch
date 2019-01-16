<?php
Route::group([

	'namespace' => 'CMS',
], function () {

	Route::get('client', 'ClientController@index')->name('client');
	Route::get('client/create', 'ClientController@create')->name('client.create');
	Route::post('client/store', 'ClientController@store')->name('client.store');
	Route::get('client/{id}/edit', 'ClientController@edit')->name('client.edit');
	Route::delete('client/{id}/delete', 'ClientController@delete')->name('client.delete');
	Route::patch('client/{id}', 'ClientController@update')->name('client.update');
	Route::get('client/{id}', 'ClientController@show');

});