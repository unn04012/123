<?php

use Illuminate\Support\Facades\Route;

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

// with()메서드를 이용
// Route::get('/', function(){
//   return view('welcome')->with([
//     'name' => 'Foo',
//     'greeting' => '안녕하세요',
//   ]);
// });

Route::resource('articles','ArticlesController');

// Route::get('/','WelcomeController@index');
// lab

Route::get('/post/{postId?}',function($postId = 6){
  return $postId;
})->name('posts');


Route::get('/test', 'TestController@index');

Route::get('/user{id}', 'UserController@show');
// endlab

Route::get('auth/login',function(){
  $credentials = [
    'email' => 'john@example.com',
    'password' => 'password'
  ];

  if(!auth()->attempt($credentials)){
    return '로그인 정보가 정확하지 않습니다';
  }
  return redirect('protected');
});

Route::get('protected',['middleware' => 'auth', function(){
  dump(session()->all());
  return '어서오세요'. auth()->user()->name;
}]);

Route::get('auth/logout',function(){
  auth()->logout();
  return '또 봐요~';
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
