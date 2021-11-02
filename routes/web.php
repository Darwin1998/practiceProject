<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

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

Route::prefix('user')->namespace('User')->name('user')->middleware(['web','auth','isUser'])->group(base_path('routes/web/user/user.php'));
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/customers', 'CustomerController@index')->name('index');
Route::get('/customers/delete/{customer}','CustomerController@delete')->name('delete');
Route::get('/customers/edit/{customer}','CustomerController@edit')->name('edit');
Route::get('/customers/create','CustomerController@create')->name('create');
Route::patch('/customers/{customer}','CustomerController@update')->name('update');
Route::post('/customer','CustomerController@store')->name('store');

Route::get('/internet_plans','InternetPlanController@index')->name('index');
Route::get('/internet_plans/create','InternetPlanController@create')->name('create');
Route::post('/internet_plan','InternetPlanController@store')->name('store');
Route::get('/internet_plans/delete/{internet_plan}','InternetPlanController@delete')->name('delete');
Route::get('/internet_plans/edit/{internet_plan}','InternetPlanController@edit')->name('edit');
Route::patch('/internet_plans/{internet_plan}','InternetPlanController@update')->name('update');

