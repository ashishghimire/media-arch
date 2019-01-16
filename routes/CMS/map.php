<?php
Route::group([
  
    'namespace'  => 'CMS',
], function () {
 Route::get('map/index' , 'MapController@index')->name('map.index');
 Route::get('map/create' , 'MapController@create')->name('map.create');
 Route::post('map/store' , 'MapController@store')->name('map.store');
Route::get('map/{id}/edit','MapController@edit')->name('map.edit');
Route::patch('map/{id}','MapController@update')->name('map.update');


});