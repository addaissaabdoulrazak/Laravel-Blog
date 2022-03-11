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

Route::get('/', function () {
    return view('welcome');
});
route::get('/test', "\App\Http\Controllers\TestController@index")->name('test.index');

route::get("/contact", '\App\Http\Controllers\ContactController@showView')->name('contact.showView');
route::post("contact", '\App\Http\Controllers\ContactController@addContact')->name('contact.addContact');
route::get('admin/contacts', '\App\Http\Controllers\AdminController@showAllContacts')->name('admin.contact');
route::get('admin/contacts/detail/{id}', 'App\Http\Controllers\AdminController@showContactByID')->name('contacts.detail');
route::get('admin/contacts/delete/{id}', 'App\Http\Controllers\AdminController@deleteContactByID')->name('contacts.delete');
route::get('articles/java', function () {
    return view('java');
});
route::get('articles/php', function () {
    return view("php");
});

route::get('articles/cpp', function () {
    return view('cpp');
});

route::get('/login', function () {
    return view("login");
});

route::get('/register', function () {
    return view("register");
});
