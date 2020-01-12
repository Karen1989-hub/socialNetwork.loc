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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about','HomeController@about')->name('about');
Route::get('/album','HomeController@album')->name('album');
Route::get('/friends','HomeController@friends')->name('friends');
Route::get('/editProf','HomeController@editProf')->name('editProf');
Route::get('/educEndWork','HomeController@educEndWork')->name('educEndWork');
Route::get('/myInterest','HomeController@myInterest')->name('myInterest');
Route::get('/changePassword','HomeController@changePassword')->name('changePassword');

Route::post('/changeBasicInform','changeUserInformController@changeBasicInform')->name('changeBasicInform');
Route::post('/saveEducat','changeUserInformController@saveEducat')->name('saveEducat');
Route::post('/saveWorkExp','changeUserInformController@saveWorkExp')->name('saveWorkExp');
Route::post('/saveNewPassword','changeUserInformController@changePassword')->middleware('CheckOldPassword')->name('saveNewPassword');
