<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BrandsliderController;
use App\Http\Controllers\Admin\MainsliderController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\CommitteeController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\AllinfoController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\AdController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\frontendController;

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

// Route::get('/', function () {
//     return view('index');
// });






Route::get('/',[frontendController::class, 'index'])->name('homePage');
Route::get('/about-us',[frontendController::class, 'about_us'])->name('about_us');


Route::get('info/{title}',[frontendController::class, 'info_details'])->name('info_details');
Route::get('Committee',[frontendController::class, 'Committee'])->name('Committeelist');
Route::get('gallery',[frontendController::class, 'Gallery'])->name('Gallerylist');




Route::get('member',[frontendController::class, 'member'])->name('memberlist');
Route::get('register-gide',[frontendController::class, 'register_gide'])->name('register_gide');


Route::get('register',[frontendController::class, 'register'])->name('member.form');
Route::get('contact',[frontendController::class, 'contact'])->name('contact');
Route::post('member/register',[frontendController::class, 'store'])->name('memeber.register');




Auth::routes([
    'register' => false,
    'login' => false,

]);
// Auth::routes();



Route::get('/admin/login', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('login');
Route::post('/admin/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/get/alldata/{title}', [AllinfoController::class, 'alldata'])->name('alldata');

Route::resources([
	'admin/brandslider' => BrandsliderController::class,
	'admin/mainslider' => MainsliderController::class,
	'admin/members' => MemberController::class,
	'admin/committee' => CommitteeController::class,
	'admin/gallery' => GalleryController::class,
	'admin/category' => CategoryController::class,
	'admin/blog' => BlogController::class,
	'admin/allinfo' => AllinfoController::class,
	'admin/ad' => AdController::class,
	'admin/setting' => SettingController::class,

]);


Route::get('admin/check/category/{category}',[CategoryController::class , 'checkCategory']);