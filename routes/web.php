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


Route::get('master', function () {
    return view('template.master');
    
});

Route::get('admin/master', function () {
    return view('catalogue.master');
    
});
Route::get('admin/list', function () {
    return view('catalogue.list');
    
});
Route:: get('testdb', function(){
	return DB::table('theloai') -> where('id',28) -> get() -> toArray();
});
//cach goi controller list_add
Route::get('catalogue_list', ['as' => 'list_catalogue', 'uses' => 'catalogue_controller@getList']);
Route::get('catalogue_add', ['as' => 'list_add', 'uses' => 'catalogue_controller@addList']);
//Route::get('catalogue_them', ['as' => 'list_them', 'uses' => 'catalogue_controller@addList']);
//phuog thuc post
Route::post('catalogue_add', ['as' => 'post_catalogue', 'uses' => 'catalogue_controller@postList']);


Route::get('catalogue_edit/{id}', ['as' => 'list_edit', 'uses' => 'catalogue_controller@editList']);
Route::get('catalogue_delete/{id}', ['as' => 'list_delete', 'uses' => 'catalogue_controller@deleteList']);
Route::post('catalogue_edit/{id}', ['as' => 'update_catalogue', 'uses' => 'catalogue_controller@updateList']);







//*router for user
Route::get('admin/master', function () {
    return view('user.master');
    
});
Route::get('admin/user_list', function () {
    return view('user.user_list');
    
});

//cach goi controller
Route::get('user_list', ['as' => 'list_user', 'uses' => 'user_controller@getUser']);
Route::get('user_add', ['as' => 'user_add', 'uses' => 'user_controller@addUser']);
Route::post('user_add', ['as' => 'post_user', 'uses' => 'user_controller@postUser']);
Route::get('user_edit/{id}', ['as' => 'user_edit', 'uses' => 'user_controller@editUser']);
Route::get('user_delete/{id}', ['as' => 'user_delete', 'uses' => 'user_controller@deleteUser']);
Route::post('user_edit/{id}', ['as' => 'update_user', 'uses' => 'user_controller@updateUser']);
Route::get('user_login', ['as' => 'login_user', 'uses' => 'user_controller@loginUser']);
Route::post('user_login', ['as' => 'post_login', 'uses' => 'user_controller@post_loginUser']);


//ajax type of news
Route::get('ajax_type_news/{idtheloai}',  'news_controller@ajaxType_news');

//*router for news
Route::get('news_list', ['as' => 'list_news', 'uses' => 'news_controller@getNews']);
Route::get('news_add', ['as' => 'news_add', 'uses' => 'news_controller@addNews']);
Route::post('news_add', ['as' => 'post_news', 'uses' => 'news_controller@postNews']);
Route::get('news_edit/{id}', ['as' => 'news_edit', 'uses' => 'news_controller@editNews']);
Route::get('news_delete/{id}', ['as' => 'news_delete', 'uses' => 'news_controller@deleteNews']);
Route::post('news_edit/{id}', ['as' => 'update_news', 'uses' => 'news_controller@updateNews']);
//ajax type of news
Route::get('ajax_type_news/{idtheloai}',  'news_controller@ajaxType_news');

//*router for slide
oute::get('slide_list', ['as' => 'list_slide', 'uses' => 'slide_controller@getSlide']);
Route::get('slide_add', ['as' => 'slide_add', 'uses' => 'slide_controller@addSlide']);
Route::post('slide_add', ['as' => 'post_slide', 'uses' => 'slide_controller@postSlide']);
Route::get('slide_edit/{id}', ['as' => 'slide_edit', 'uses' => 'slide_controller@editSlide']);
Route::get('slide_delete/{id}', ['as' => 'slide_delete', 'uses' => 'slide_controller@deleteSlide']);
Route::post('slide_edit/{id}', ['as' => 'update_slide', 'uses' => 'slide_controller@updateSlide']);