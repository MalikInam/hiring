<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/frontend', [App\Http\Controllers\HomeController::class, 'main']);
Route::get('/contact', [App\Http\Controllers\SellerController::class, 'contact']);
Route::post('send_message', [App\Http\Controllers\SellerController::class, 'message_store']);




/////////////seller working

Route::get('/seller_profiles', [App\Http\Controllers\SellerController::class, 'seller_profile']);
Route::post('profile_upload', [App\Http\Controllers\SellerController::class, 'profile_store']);
Route::get('seller_dashboard', [App\Http\Controllers\SellerController::class, 'dashboard']);
Route::get('user_logout', [App\Http\Controllers\SellerController::class, 'logout']);
Route::get('user_register', [App\Http\Controllers\SellerController::class, 'store']);
Route::get('view_project', [App\Http\Controllers\SellerController::class, 'project']);
Route::get('send_proposal', [App\Http\Controllers\SellerController::class, 'proposal']);
Route::post('proposal_save', [App\Http\Controllers\SellerController::class, 'proposal_store']);
Route::get('view_profile', [App\Http\Controllers\SellerController::class, 'profile']);
Route::get('show_reviews', [App\Http\Controllers\SellerController::class, 'buer_review']);


///////////////buyer working
Route::get('buyer_profiles', [App\Http\Controllers\BuyerController::class, 'buyer_profile']);
Route::post('buyer_profile_upload', [App\Http\Controllers\BuyerController::class, 'buyer_profile_store']);
Route::get('buyer_project', [App\Http\Controllers\BuyerController::class, 'create']);
Route::post('post_project', [App\Http\Controllers\BuyerController::class, 'buyer_store']);
Route::get('buyer_dashboard', [App\Http\Controllers\BuyerController::class, 'buyer_dashboard']);
Route::get('show_proposal', [App\Http\Controllers\BuyerController::class, 'show_proposal']);
Route::get('seller_profile/{id}', [App\Http\Controllers\BuyerController::class, 'seller_profile']);

Route::get('show_project', [App\Http\Controllers\BuyerController::class, 'show_project']);
Route::get('show_review', [App\Http\Controllers\BuyerController::class, 'review']);
Route::post('save_review', [App\Http\Controllers\BuyerController::class, 'review_store']);

Route::get('project_status/{id}', [App\Http\Controllers\BuyerController::class, 'status']);
Route::post('update_status', [App\Http\Controllers\BuyerController::class, 'chanagestatus']); 
Route::get('seller_buyer/buyer/view_proposal/destory/{id}', [App\Http\Controllers\BuyerController::class, 'destroy']);
Route::get('show_profile', [App\Http\Controllers\BuyerController::class, 'profile']);
Route::get('show_message', [App\Http\Controllers\BuyerController::class, 'message']);
Route::get('projects_status/{id}', [App\Http\Controllers\BuyerController::class, 'statusch']);
Route::post('updates_status', [App\Http\Controllers\BuyerController::class, 'chanagesstatus']);
Route::get('seller_buyer/buyer/view_project/delete/{id}', [App\Http\Controllers\BuyerController::class, 'delete']);

/////////////admin
Route::get('admin_dashboard', [App\Http\Controllers\AdminController::class, 'create']);
Route::get('show_profile', [App\Http\Controllers\HomeController::class, 'profile']);
Route::get('show_message', [App\Http\Controllers\HomeController::class, 'message']);