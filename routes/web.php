<?php

use App\Http\Controllers\RegisteredCoursesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddCourse;
use App\Http\Controllers\Attendancelist_controller;
use App\Http\Controllers\LoadLessonsController;
use App\Http\Controllers\Classlist_controller;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PersonalInfoController;
use App\Http\Controllers\AllUsersPageController;
use App\Http\Controllers\AnalyticsPageController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\AddLecturerController;
use App\Http\Controllers\AddStudentController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\AttendanceManagerController;


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


//    Route::post('/attendclass', [Attendancelist_controller::class, 'attendclass']);

    Route::get('/attendance', function(){
        return view('atteanceform');
    });

    Route::get('/qr-interface', [App\Http\Controllers\generate_code::class, 'generate']);

    Route::get('/chart', function (){
        return view('webchart');
    });
//    Route::get('/ourses', [RoleController::class, 'role']);

    Route::get('/sidebar',[RoleController::class,'sideBarRegulator']);

    Route::get('/info', [PersonalInfoController::class, 'info']);

    Route::group(['middleware' => ['adminProtectedPages']], function(){
        Route::get('/allusers', [AllUsersPageController::class, 'alluser']);

        Route::post('/addlecture', [AddLecturerController::class, 'addLecturer']);
        Route::post('/addStudent', [AddStudentController::class, 'addStudent']);

    });
    Route::group(['middleware' => ['lecturerProtectedPages']], function(){
        Route::post('/registerCourse', [AddCourse::class, 'registerCourses']);
        Route::get('/classes', [LoadLessonsController::class, 'showLessons']);
        Route::get('/addCourses' , function(){
            return view('addCourses');
        });
        Route::get('/home', function(){
            return view('home');
        });
    });
    Route::get('/courses',[AddCourse::class, 'registeredCourses']);
    Route::get('/analytics', [AnalyticsPageController::class, 'count']);
    Route::get('/attendancelist', [Attendancelist_controller::class, 'attendanceList']);

    //Location route
    Route::get('showLocation', [LocationController::class, 'showIp']);
    Route::post('/attend', [generate_code::class, 'generate']);

    Route::post('/addlecture', [AddLecturerController::class, 'addLecturer']);
    Route::post('/addStudent', [AddStudentController::class, 'addStudent']);

//    Route::get('/search/users', [UsersController::class,'search']);
//    Route::get('/search', [AllUsersPageController::class,'search']);

    Route::get('faculty', [FacultyController::class , 'allfaculty']);
    Route::get('delete/{id}', [AllUsersPageController::class, 'delete']);
    Route::get('/studentAttendance', [AttendanceManagerController::class, 'studentAttendance']);


    Route::get('editUser/{id}', [AllUsersPageController::class, 'edit']);
    Route::put('updateUser/{id}', [AllUsersPageController::class, 'update'] );
//    Route::get('/registered', [RegisteredCoursesController::class, 'registerdList']);
    Route::get('/courseReg', [RegisteredCoursesController::class, 'registerdList']);
    Route::get('/studentLogs', [AttendanceManagerController::class, 'studentAttendanceLogs']);

    Route::get('/attendanceForm', [AttendanceManagerController::class, 'attendClass']);
});

