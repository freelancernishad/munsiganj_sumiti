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
use App\Http\Controllers\countryApiController;
use App\Http\Controllers\BlogCommentController;
use App\Http\Controllers\GlobalCommitteeController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\HistoryCategoryController;
use App\Http\Controllers\HistoryPlaceController;
use App\Http\Controllers\ProminentPersonsController;
use App\Http\Controllers\NoticeController;

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



// country api
Route::post('/getdistrict', [countryApiController::class,'getdistrict']);
Route::post('/getthana', [countryApiController::class,'getthana']);
Route::post('/getunioun', [countryApiController::class,'getunioun']);
Route::post('/gotoUnion', [countryApiController::class,'gotoUnion']);




Route::get('/',[frontendController::class, 'index'])->name('homePage');
Route::get('/about-us',[frontendController::class, 'about_us'])->name('about_us');


Route::get('ProminentPersons',[frontendController::class, 'ProminentPersons'])->name('ProminentPersons');
Route::get('HistoricalPlace',[frontendController::class, 'HistoricalPlace'])->name('HistoricalPlace');
Route::get('info/{title}',[frontendController::class, 'info_details'])->name('info_details');
Route::get('Committee',[frontendController::class, 'Committee'])->name('Committeelist');
Route::get('ExCommittee',[frontendController::class, 'ExCommittee'])->name('ExCommitteelist');
Route::get('golobal/Committee',[frontendController::class, 'golobalCommittee'])->name('golobalCommitteelist');
Route::get('gallery',[frontendController::class, 'Gallery'])->name('Gallerylist');




Route::get('blood',[frontendController::class, 'blood'])->name('blood');
Route::get('member',[frontendController::class, 'member'])->name('memberlist');
Route::get('refdata',[frontendController::class, 'refdata'])->name('refdata');
Route::post('member/submit',[frontendController::class, 'memberList_submit'])->name('memberList_submit');

Route::get('member/{disteict}/{upozila}',[frontendController::class, 'member_search'])->name('memberlist_search');
Route::get('register-gide',[frontendController::class, 'register_gide'])->name('register_gide');


Route::get('register',[frontendController::class, 'register'])->name('member.form');
Route::get('contact',[frontendController::class, 'contact'])->name('contact');


Route::get('blogs',[frontendController::class, 'blogs'])->name('blogs');
Route::get('blogs/{category}',[frontendController::class, 'blogs_category'])->name('blogs_category');
Route::get('blogs/single/{id}',[frontendController::class, 'blogs_single'])->name('blogs_single');

Route::resources([
	'blog/comment' => BlogCommentController::class,


]);

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
	'admin/globalcommittee' => GlobalCommitteeController::class,
	'admin/gallery' => GalleryController::class,
	'admin/category' => CategoryController::class,
	'admin/blog' => BlogController::class,
	'admin/allinfo' => AllinfoController::class,
	'admin/ad' => AdController::class,
	'admin/video' => VideoController::class,
	'admin/notice' => NoticeController::class,
	'admin/HistoryCategory' => HistoryCategoryController::class,
	'admin/HistoryPlace' => HistoryPlaceController::class,
	'admin/ProminentPersons' => ProminentPersonsController::class,
	'admin/setting' => SettingController::class,

]);


Route::get('admin/check/category/{category}',[CategoryController::class , 'checkCategory']);
