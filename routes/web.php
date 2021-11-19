<?php

use Illuminate\Support\Facades\Route;

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
    return redirect("login");
});
Auth::routes(['register' => false]);

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Route::group([
    'middleware' => ['auth', 'role:superadmin'],
    'namespace'=>'User',
    'prefix'=>'user',
], function() {

    //System Setting

    Route::get('/setting', 'SettingController@showSettings')->name('show.setting');
    Route::post('/create/setting', 'SettingController@postSettings')->name('post.setting');

//User Management SuperAdmin
    Route::get('user', 'UserController@showSuperAdmin')->name('show.user');
    Route::post('create/user', 'UserController@createSuperAdmin')->name('create.user');
    Route::get('/delete_superadmin/{user?}', 'UserController@deleteSuperAdmin')->name('user.delete');

//User Management Politician
    Route::get('government', 'UserController@showGovernment')->name('show.government');
    Route::post('create/government', 'UserController@createGovernment')->name('create.government');
    Route::get('/delete_government/{user?}', 'UserController@deleteGovernment')->name('government.delete');
    Route::post('/edit_government/{user?}', 'UserController@editGovernment')->name('admin.edit');

    //User Management Senior Citizen
    Route::get('seniorcitizen', 'UserController@showSeniorCitizen')->name('show.seniorcitizen');
    Route::post('create/senior_citizen', 'UserController@createSeniorCitizen')->name('create.seniorcitizen');
    Route::get('/delete_senior_citizen/{user}', 'UserController@deleteSeniorCitizen')->name('seniorcitizen.delete');

//User Management Hospital
    Route::get('hospital', 'UserController@showHospital')->name('show.hospital');
    Route::post('create/hospital', 'UserController@createHospital')->name('create.hospital');
    Route::get('/delete_hospital/{user}', 'UserController@deleteHospital')->name('hospital.delete');


    //Senior Citizen Profile
    Route::get('senior_citizen', 'ProfileController@showSeniorCitizenProfile')->name('show.seniorcitizenprofile');




});



Route::group([
    'middleware' => ['auth', 'role:seniorcitizen'],
    'namespace'=>'User',
    'prefix'=>'user',
], function() {


    //PROFILE
    Route::get('/profile', 'ProfileController@showProfile')->name('profile');
    Route::post('/create_profile', 'ProfileController@updateProfile')->name('create_profile');
    Route::post('/update_account_details', 'ProfileController@updateWithdrawalInfo')->name('update_account_details');

});


Route::group([
    'middleware' => ['auth', 'role:hospital'],
    'namespace'=>'User',
    'prefix'=>'user',
], function() {



    Route::post('/hospitals/create_profile', 'ProfileController@updateProfile')->name('create_profile');


    //Getting Information Of Senior Citizen

    Route::get('/senior_citizen', 'ProfileController@showSeniorCitizenProfileHopitals')->name('show.seniorcitizenprofilehospital');




});


Route::group([
    'middleware' => ['auth', 'role:government'],
    'namespace'=>'User',
    'prefix'=>'user',
], function() {





    //Getting Information Of Senior Citizen

    Route::get('/senior_citizens', 'ProfileController@showSeniorCitizenProfileGovernment')->name('show.seniorcitizenprofilegovernment');




});




//Route::group([
//    'middleware' => ['auth', 'role:hospital'],
//    'namespace'=>'User',
//    'prefix'=>'user',
//], function() {
//
//
//    //PROFILE
//    Route::get('/profile', 'ProfileController@showProfile')->name('profile');
//    Route::post('/create_profile', 'ProfileController@updateProfile')->name('create_profile');
//    Route::post('/update_account_details', 'ProfileController@updateWithdrawalInfo')->name('update_account_details');
//
//});


//Change Password
Route::post('/auth/change_password', 'Auth\ChangePasswordController@store_password')->name('change_password');
