<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('role',[
 'middleware' => 'Role:editor',
 'uses' => 'TestController@index',
]);

Route::get('terminate',[
   'middleware' => 'terminate',
   'uses' => 'ABCController@index',
]);


Route::resource('my','MyController');

class MyClass{
   public $foo = 'bar';
}
Route::get('/myclass','ImplicitController@index');


Route::get('/foo/bar','UriController@index');



Route::get('/register',function(){
   return view('register');
});
Route::post('/user/register',array('uses'=>'UserRegistration@postRegister'));

Route::get('/cookie/set','CookieController@setCookie');
Route::get('/cookie/get','CookieController@getCookie');



Route::get('/test', function(){
   return view('test');
});

Route::get('/test2', function(){
   return view('test2');
});


Route::get('/test', ['as'=>'testing',function(){
   return view('test2');
}]);

Route::get('redirect',function(){
   return redirect()->route('testing');
});


Route::get('rr','RedirectController@index');
Route::get('/redirectcontroller',function(){
   return redirect()->action('RedirectController@index');
});



Route::get('insert','EstudiantesController@insertform');
Route::post('create','EstudiantesController@insert');



Route::get('vistaEstudiantes','EstudiantesVerController@index');

Route::get('edit-records','ActualizaEstudianteController@index');
Route::get('edit/{id}','ActualizaEstudianteController@show');
Route::post('edit/{id}','ActualizaEstudianteController@edit');



Route::get('borrarEstudiantes','BorrarController@index');
Route::get('delete/{id}','BorrarController@destroy');



Route::get('session/get','SessionController@accessSessionData');
Route::get('session/set','SessionController@storeSessionData');
Route::get('session/remove','SessionController@deleteSessionData');




Route::get('/uploadfile','UploadFileController@index');
Route::post('/uploadfile','UploadFileController@showUploadFile');
