<?php
Route::group([
  
    'namespace'  => 'CMS',
], function () {
 Route::get('dynamicmenu/index' , 'DynamicMenuController@index')->name('dynamicmenu.index');
 Route::get('dynamicmenu/create' , 'DynamicMenuController@create')->name('dynamicmenu.create');
 Route::post('dynamicmenu/store' , 'DynamicMenuController@store')->name('dynamicmenu.store');
Route::get('dynamicmenu/{id}/edit','DynamicMenuController@edit')->name('dynamicmenu.edit');
Route::patch('dynamicmenu/{id}','DynamicMenuController@update')->name('dynamicmenu.update');


});