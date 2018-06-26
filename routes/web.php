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

//Route::get('posts', function (){
//    return 'test message';
//});

//Route::get('posts/{postId?}',function ($postId = 1){//파라미터로 넘어온 포스트 값을 펑션에 넘겨준다.
//    return 'Post Id:' . $postId;
//    //파라미터가 있을수도 있고 없을수도 있다 이럴땐 ? 붙인다.
//    //펑션 매개변수에 특정 인자를 붙이면 값이 없을때는 그인자를 받아 넘긴다.
//})->name('posts');//라우트에 네이밍을 정한다.
//
////Route::get('test',function (){
////    return redirect()->route('posts');//test URL이 들어왔을때 포스트로 네이밍한 라우트로 리다이렉트한다.(채이닝한다.)
////});
//
////Route::get('test','TestController');
//
//Route::get('test','TestController@test')->name('test');//TestController의 test함수를 타라
//
//Route::get('posts/{postId}/comments/{commentId}', function ($postId, $commentId){
//    return 'post id:'. $postId . ',comment id'. $commentId;
//});
//
////Route::get('dashboard',function (){//대시보드는 로그인한 사람만 접근이 가능해야하니깐 middleware통과시킨다.
////    return 'Dashboard';
////})->middelware('auth');
////
////Route::get('user/profile',function (){//대시보드는 로그인한 사람만 접근이 가능해야하니깐 middleware통과시킨다.
////    return 'user profile';
////})->middelware('auth');
//
//Route::group(['middleware' => 'auth'], function (){//같은 미들워에를 사용하는 걸 그룹핑한다.
//    Route::get('dashboard',function (){//대시보드는 로그인한 사람만 접근이 가능해야하니깐 middleware통과시킨다.
//        return 'Dashboard';
//    });
//
//    Route::get('user/profile',function (){//대시보드는 로그인한 사람만 접근이 가능해야하니깐 middleware통과시킨다.
//        return 'user profile';
//    });
//});
//
////namespace ->
//
//Route::group(['namespace' => 'Admin'], function (){
//    // App\Http\Controllers\Admin
//});
//
////prefix
//Route::group(['prefix' => 'system'], function (){
//    Route::get('show', function (){
//        // system/show system아래의 요청들을 그룹핑한다.
//    });
//});

//Route::get('user/{id}', 'UserController@show') -> middleware('auth'); //미들웨어를 사용하는 방법2

Route::get('user/{id}', 'UserController@show');

Route::resource('post','PostController', ['only'=>['index', 'show', 'delete']]);//세 함수만 사용할것이다.

//Route::resource('post','PostController', ['except'=>['index', 'show', 'delete']]);//세 함수만 사용안할것이다.

//이런 URL일 경우 그유저의 대한 해당 포스트를 불러올때
// get user/5/post/7 -> show 함수가 실행
// get user/5/post   -> index 함수가 실행
Route::resource('user.post','PostController');

// namespace App\Http\Controllers\Admin
//Admin 계층화
//Route::get('dashboard','Admin\AdminController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
