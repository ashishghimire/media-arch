<?php
Route::group([
  
    'namespace'  => 'CMS',
], function () {
 Route::get('setting/index' , 'SettingController@index')->name('setting.index');
 Route::get('setting/create' , 'SettingController@create')->name('setting.create');
 Route::post('setting/store' , 'SettingController@store')->name('setting.store');

Route::get('setting/{id}/edit','SettingController@edit')->name('setting.edit');
Route::patch('setting/{id}','SettingController@update')->name('setting.update');

});