<?php
  Route::get('role',[
   'middleware' => 'Role:editor',
   'uses' => 'TestController@index',
]);
Route::get('terminate',[
   'middleware' => 'terminate',
   'uses' => 'ABCController@index',
]);
