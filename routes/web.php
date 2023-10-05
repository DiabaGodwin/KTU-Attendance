<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddCourse;
use App\Http\Controllers\Attendancelist_controller;
use App\Http\Controllers\LoadLessonsController;
use App\Http\Controllers\Classlist_controller;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PersonalInfoController;
use App\Http\Controllers\AllUsersPageController;
use App\Http\Controllers\AnalyticsPageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function (){
    return view('welcome');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',

])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/classlist' ,[Classlist_controller::class, 'showList']);

    Route::get('/classes', [LoadLessonsController::class, 'showLessons']);

    Route::post('/attendclass', [Attendancelist_controller::class, 'attendclass']);

    Route::get('/attendance', function(){
        return view('atteanceform');
    });

    Route::get('/qr-interface', [App\Http\Controllers\generate_code::class, 'generate']);

    Route::get('/chart', function (){
        return view('webchart');
    });
Route::get('/addCourses', [RoleController::class, 'role']);

    Route::get('/sidebar',[RoleController::class,'sideBarRegulator']);

    Route::get('/info', [PersonalInfoController::class, 'info']);

    Route::group(['middleware' => ['adminProtectedPages']], function(){
        Route::get('/allusers', [AllUsersPageController::class, 'alluser']);

    });
    Route::group(['middleware' => ['lecturerProtectedPages']], function(){
        Route::post('/courses', [AddCourse::class, 'addCourse']);
        Route::get('/addCourses' , function(){
            return view('addCourses');
        });
        Route::get('/home', function(){
            return view('home');
        });
    });

//    Route::get('/analytics' , function(){
//        return view('analytics');
//    });
    Route::get('/analytics', [AnalyticsPageController::class, 'count']);
    Route::get('/attendancelist', [Attendancelist_controller::class, 'attendanceList']);
});

