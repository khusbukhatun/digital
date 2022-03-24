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
use App\Http\Controllers\MenuController;
use App\menu;
use App\site_setting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    // $is_fetched = false;
    // ifrrrr ($is_fetched) {
        $settings = site_setting::find(1);
        Session::put('site_setting', $settings);
        // dd(Session::get('site_setting'));
    //     $is_fetched = true;
    // }

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

//RESERVATION//
Route::post('/reservation',[AdminLoginController::class,'reservation'])->name('reservation');
Route::get('/viewreservation',[AdminLoginController::class,'viewreservation'])->name('viewreservation');

//CHEFS//
Route::get('/viewchef',[AdminLoginController::class,'viewchef'])->name('viewchef');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::view('/user/dashboard', 'layouts.frontend.layouts.master');

// SITE_SETTING //
Route::get('/site_setting',[SiteSettingController::class,'site_settings'])->name('site.setting');
Route::post('/update_setting',[SiteSettingController::class,'settings_update'])->name('update.setting');

//menu_list
Route::get('/menu',[MenuController::class,'showdata'])->name('menu.list');
Route::get('/menu/list', function () {
    // $is_fetched = false;
    // if ($is_fetched) {
        $menus = menu::find(1);
        Session::put('menu', $menus);
        // dd(Session::get('menu'));
    //     $is_fetched = true;
    // }

    return view('welcome');
});

Route::get('/create_menu',[MenuController::class,'create'])->name('add.newdata');
Route::post('/menu_submit',[MenuController::class,'menu_submit'])->name('menu.submit');
Route::post('/update_menu/{id}',[MenuController::class,'update'])->name('menus.update');

Route::get('/edit_menu/{id}',[MenuController::class,'edit'])->name('menus.edit');
Route::get('/delete_menu/{id}',[MenuController::class,'delete'])->name('menus.delete');

