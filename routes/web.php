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

// Route::get('/', function () {
//         // return view('welcome');
//     return 'Hello World';
// });
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminControlls;

// Route::get('/', 'PagesController@index');
Route::get('/', 'PagesController@book');
Route::get('/admin', 'AdminControlls@displayEvents');

Route::post('admin/addEvent', 'AdminControlls@addEvent');
Route::get('edit/{id}', 'AdminControlls@edit');
Route::post('update', 'AdminControlls@update')->name('update');
Route::get('delete/{id}', 'AdminControlls@delete');
Route::get('bookEvent/{id}', 'PagesController@bookEvent');
Route::post('updateTicket', 'PagesController@updateTicket')->name('updateTicket');
Route::post('updateTicket', 'PagesController@sendEmail')->name('updateTicket');
