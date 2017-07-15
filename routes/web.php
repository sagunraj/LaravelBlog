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
// Route::get('contact', 'PagesController@getContact');

// Route::get('about', 'PagesController@getAbout');

Route::get('/', 'PagesController@getIndex');
Route::prefix("admin")->middleware("admin")->group(function(){
Route::get("/users","AdminController@index")->name("admin.users.index");
Route::get("/user/{id}","AdminController@single")->name("admin.user.single");
Route::delete("/user/{id}","AdminController@delete")->name("admin.user.delete");
});
Route::prefix("home")->middleware("home")->group(function(){
Route::get("/index","GuestController@index")->name("home.user.index");
Route::get("/add","GuestController@add")->name("home.add");
Route::post("/add","GuestController@store")->name("home.store");
Route::get("/edit/{id}","GuestController@edit")->name("home.user.edit");
Route::put("/edit/{id}","GuestController@update")->name("home.user.update");
Route::delete("/{id}","GuestController@delete")->name("home.user.delete");




});


Route::get("/home/{slug}","HomeController@getHome")->name("home.index.user");
Route::get("/search","HomeController@search")->name("search");
Route::get("/about","HomeController@about")->name("about");
Route::get("/homes","HomeController@all")->name("homes.all");

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
