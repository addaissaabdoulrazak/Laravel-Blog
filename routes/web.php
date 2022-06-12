<?php

use App\Http\Controllers\CoursController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\UserController;

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

Route::get('/',[WelcomeController::class, 'showView']);

route::get('/test', "\App\Http\Controllers\TestController@index")->name('test.index');

route::get("contact", '\App\Http\Controllers\ContactController@showView')->name('contact.showView');
route::post("contact", '\App\Http\Controllers\ContactController@addContact')->name('contact.addContact');
route::get('admin/contacts', '\App\Http\Controllers\AdminController@showAllContacts')->name('admin.contact');
route::get('admin/contacts/detail/{id}', 'App\Http\Controllers\AdminController@showContactByID')->name('contacts.detail');
route::get('admin/contacts/delete/{id}', 'App\Http\Controllers\AdminController@deleteContactByID')->name('contacts.delete');
route::get('articles/java', function () {
    return view('java');
});
route::get('/articles/php', function () {
    return view("php");
});

route::get('/articles/cpp', function () {
    return view('cpp');
});




route::get('/login', function () {
    return view("login");
});

route::get('/register', function () {
    return view("register");
});
// ->middleware('admin')


#cours -> cours/create -> cours/edit -> cours/update -> cours/delete
//--========================================== Cours =====================================--
route::get('/showCours', [CoursController::class, 'showCours'])->name('cours.show'); 
route::post('/saveCourse',[CoursController::class, 'save'])->name('cours.save') ;   
route::get('/getCoursById/{id}',[CoursController::class, 'getCoursById'])->name('cours.getCoursById')->middleware('admin');
route::get('/edit/{id}',[CoursController::class, 'edit'])->name('cours.edit')->middleware('admin');
route::get('/deleteCours/{id}',[CoursController::class, 'deleteCours'])->name('cours.deleteCours')->middleware('admin');
route::put('/updateCours/{id}',[CoursController::class, 'updateCours'])->name('cours.updateCours')->middleware('admin');
route::get('/showTableCourse',[CoursController::class, 'showTableCourse'])->name('list.showTableCourse')->middleware('admin');

// --======================================== Authentification =============================================--

#Custom Dashboard
route::get("/dashboard",[UserController::class, 'dashboard'])->name('dashboard');

#Register
route::get("/register",[UserController::class, 'showView'])->name('user.register');
route::post("/register/create",[UserController::class, 'createUser'])->name('user.register.create');

#Login
route::get("/login",[UserController::class, 'Index'])->name('login_from');
route::post("/login/owner",[UserController::class, 'Login'])->name('login');

#logOut
route::get("/logOut",[UserController::class, 'logOut'])->name('logOut');

//User DashBoard
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['user'])->name('dashboard');

//Admin DashBoard
// Route::get('/admin_dashboard', function () {
//     return view('admin_dashboard');
// })->middleware(['admin'])->name('admin_dashboard');

