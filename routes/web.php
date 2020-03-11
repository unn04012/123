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

Route::get('/', function(){
  return view('welcome');
});
Auth::routes();
Route::resource('articles','ArticlesController');
// DB::listen(function ($query){
//   var_dump($query->sql);
// });


// Event::listen('article.created', function($article){
//   var_dump('이벤트를 받았습니다. 받은 데이터상태는 다음과 같습니다');
//   var_dump($article->toArray());
// });
