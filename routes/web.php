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
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\restaurants;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\SiteSettingController;

Route::get('/', function () {
    return view('welcome');

});

Route::get('/dashboard',[restaurants::class,'dashboard'])->name('dashboard');
Route::view('/digitalrestaurant', 'backend.layouts.master')->name('digital.restaurant');

//RESTAURANT//
Route::get('/restaurants',[restaurants::class,'showdata'])->name('restaurants');
Route::get('/restaurant_create',[restaurants::class,'create'])->name('add.new');
Route::post('/restaurant_submit',[restaurants::class,'restaurant_submit'])->name('restaurant.submit');

Route::get('/edit_restaurant/{id}',[restaurants::class,'edit'])->name('restaurants.edit');
Route::post('/update_restaurant/{id}',[restaurants::class,'update'])->name('restaurants.update');
Route::get('/delete_restaurant/{id}',[restaurants::class,'delete'])->name('restaurants.delete');

//ADMIN LOGIN//

Route::get('/admin/login',[AdminLoginController::class,'adminLogin'])->name('admin.login');
Route::post('/admin/login/submit',[AdminLoginController::class,'submit'])->name('admin.submit');
Route::get('/admin/logout',[AdminLoginController::class,'adminLogout'])->name('admin.logout');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::view('/user/dashboard', 'layouts.frontend.layouts.master');
Route::get('/site_setting',[SiteSettingController::class,'site'])->name('site.setting');
Route::post('/update_setting',[SiteSettingController::class,'update'])->name('update.setting');

