<?php
Route::group([

	'namespace' => 'CMS',
], function () {

	Route::get('testimonial', 'TestimonialController@index')->name('testimonial');
	Route::get('testimonial/create', 'TestimonialController@create')->name('testimonial.create');
	Route::post('testimonial/store', 'TestimonialController@store')->name('testimonial.store');
	Route::get('testimonial/{id}/edit', 'TestimonialController@edit')->name('testimonial.edit');
	Route::delete('testimonial/{id}/delete', 'TestimonialController@delete')->name('testimonial.delete');
	Route::patch('testimonial/{id}', 'TestimonialController@update')->name('testimonial.update');
	Route::get('testimonial/{id}', 'TestimonialController@show');

});