<?php
Route::group([
  
    'namespace'  => 'CMS',
], function () {
 Route::get('social/index' , 'SocialController@index')->name('social.index');
 Route::get('social/create' , 'SocialController@create')->name('social.create');
 Route::post('social/store' , 'SocialController@store')->name('social.store');
Route::get('social/{id}/edit','SocialController@edit')->name('social.edit');
Route::patch('social/{id}','SocialController@update')->name('social.update');

});