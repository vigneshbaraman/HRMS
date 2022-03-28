<?php

use Illuminate\Support\Facades\Auth;
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
    return view('login');
});




Auth::routes();

Route::get('logout','AuthController@logout');
Route::post('login_check_process', 'LoginController@login_check_process' );

//Buddy Controller routes
Route::get('buddy_profile','BuddyController@profile');
Route::get('/buddy_dashboard', 'BuddyController@buddy_dashboard')->name('candidate_dashboard');
Route::get('buddy', 'BuddyController@buddy_info')->name('buddy_info');
Route::post('show_buddy_feedback','BuddyController@View_Buddy_feedback');





//Candidate controller routes
Route::get('/preOnboarding','CandidateController@preOnboarding');
Route::post('/PreOnBoarding_save','CandidateController@insertPreOnboarding');
Route::get('candidate_profile','CandidateController@profile');
Route::get('/dashboard', 'CandidateController@candidate_dashboard')->name('candidate_dashboard');
Route::get('Buddy_feedback', 'CandidateController@buddy')->name('buddy_feedback');
Route::post("SaveBuddyFeedback",'candidateController@InsertBuddyFeedback');




//HRSS controller routes
Route::get('HRSS','HrController@index');
Route::get('hrsspreOnboarding','HrController@preOnboarding');
Route::get('hrssCandidate','Hrcontroller@Candidate');
Route::get('userdocuments','Hrcontroller@userdocuments');
Route::get('candidate_profile_add','HrController@CandidateProfile');
Route::get('Hrss_profile','HrController@profile');
Route::get('hrssdayZero','Hrcontroller@DayZero');
Route::get('hrssdayOne','Hrcontroller@DayOne');
Route::post('view_preonboarding','Hrcontroller@Show_preOnBoarding');

//Admin controller routes
Route::get('/admin', 'AdminController@admin_dashboard')->name('admin_dashboard');
Route::group(['prefix' => 'admin'],function () {
        Route::get('permission', 'AdminController@permission')->name('permission');
        Route::get('business', 'AdminController@business')->name('business');
        Route::get('grade', 'AdminController@grade')->name('grade');
        Route::get('location', 'AdminController@location')->name('location');
        Route::get('blood', 'AdminController@blood')->name('blood');
        Route::get('roll', 'AdminController@roll')->name('roll');
        Route::get('department', 'AdminController@department')->name('department');
        Route::get('state', 'AdminController@state')->name('state');
        Route::get('personnel', 'AdminController@personnel')->name('personnel');
        Route::get('user', 'AdminController@user')->name('user');
        Route::get('roles', 'AdminController@roles')->name('roles');

    }
);

Route::post('add_roles_process', 'AdminController@add_roles_process');
Route::post('get_role_data', 'AdminController@get_role_data');
