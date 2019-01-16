<?php
Route::group([
  
    'namespace'  => 'CMS',
], function () {
 Route::get('setting' , 'FrontViewingController@index');
 

});