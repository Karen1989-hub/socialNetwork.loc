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

//get views controller
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about','HomeController@about')->name('about');
Route::get('/album','HomeController@album')->name('album');
Route::get('/friends','HomeController@friends')->name('friends');
Route::get('/editProf','HomeController@editProf')->name('editProf');
Route::get('/educEndWork','HomeController@educEndWork')->name('educEndWork');
Route::get('/changePassword','HomeController@changePassword')->name('changePassword');
Route::get('/search',"HomeController@searchUser")->name('searchUser');
Route::get('usersList','HomeController@getUsersList')->name('usersList');
Route::get('/friendRequest','HomeController@friendRequest')->name('friendRequest');
Route::get('/chatroom','HomeController@show')->name('chatroom');


//profile information controller 
Route::post('/changeBasicInform','changeUserInformController@changeBasicInform')->name('changeBasicInform');
Route::post('/saveEducat','changeUserInformController@saveEducat')->name('saveEducat');
Route::post('/saveWorkExp','changeUserInformController@saveWorkExp')->name('saveWorkExp');
Route::post('/saveNewPassword','changeUserInformController@changePassword')->middleware('CheckOldPassword')->name('saveNewPassword');
Route::post('/changeProfImage','changeUserInformController@changeProfImage')->name('changeProfImage');

//create post cotroller
Route::post('createPost','PostCreateController@createNewPost')->name('createNewPost');
Route::post('/insertLike','PostCreateController@insertLike')->name('insertLike');
Route::post('/insertdisLike','PostCreateController@insertdisLike')->name('insertdisLike');
Route::post('/getComment','PostCreateController@getComment')->name('getComment');

//find friends controller
//Route::post('/findUser','FindFriend@findUser')->name('findUser');
Route::get('/showUsers','FindFriend@showUsers')->name('showUsers');
Route::post('/guestPage','FindFriend@guestPage')->name('guestPage');
Route::post('/setFriendRequest','FindFriend@setFriendRequest')->name('setFriendRequest');
//Route::get('/getFriendRequest','FindFriend@getFriendRequest')->name('getFriendRequest');
Route::post('/insertAcceptanceОfRequest','FindFriend@insertAcceptanceОfRequest');







