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


Route::group(['middleware' => ['auth']], function ()
{
Route::get('/admin','AdminController@show')->name('admin_panel');

Route::match(['get','post','delete'],'admin/edit/product/{id}',['uses'=>'EditProductController@edit','as'=>'edit_product']);
Route::match(['get','post','delete'],'admin/edit/service/{id}',['uses'=>'EditServiceController@edit','as'=>'edit_service']);
Route::match(['get','post','delete'],'admin/edit/carousel/{id}',['uses'=>'EditCarouselController@edit','as'=>'edit_carousel']);
Route::match(['get','post'],'admin/info/edit',['uses'=>'InfoController@edit','as'=>'edit_info']);

Route::match(['get','post'],'admin/add/product',['uses'=>'ProductController@add','as'=>'add_product']);
Route::match(['get','post'],'admin/add/service',['uses'=>'ServiceController@add','as'=>'add_service']);
Route::match(['get','post'],'admin/add/carousel',['uses'=>'CarouselController@add','as'=>'add_carousel']);

});
Auth::routes();
Route::get('/','IndexController@execute')->name('main');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('service_view/{id}','ServiceController@view')->name('view_service');
Route::get('product_view/{id}','ProductController@view')->name('view_product');
