<?php
Route::group([

	'namespace' => 'CMS',
], function () {

	Route::get('ourservice', 'OurServiceController@index')->name('ourservice');
	Route::get('ourservice/create', 'OurServiceController@create')->name('ourservice.create');
	Route::post('ourservice/store', 'OurServiceController@store')->name('ourservice.store');
	Route::get('ourservice/{id}/edit', 'OurServiceController@edit')->name('ourservice.edit');
	Route::delete('ourservice/{id}/delete', 'OurServiceController@delete')->name('ourservice.delete');
	Route::patch('ourservice/{id}', 'OurServiceController@update')->name('ourservice.update');
	Route::get('ourservice/{id}', 'OurServiceController@show');

});