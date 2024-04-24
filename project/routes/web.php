<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdministrationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EmploiController;
use App\Http\Controllers\LicenseController;
use App\Http\Controllers\NewPasswordController;
use App\Http\Controllers\PasswordResetLinkController;
use App\Http\Controllers\ProfController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Models\Administration;
use Illuminate\Support\Facades\Route;
use PharIo\Manifest\License;

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

Route::middleware(['authed'])->group(function () {
    Route::get('/register', [AuthController::class, 'signupView'])->name('signup');
    Route::post('/register', [AuthController::class, 'signup'])->name('register');
    Route::get('/login', [AuthController::class, 'signinView'])->name('signin');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    
    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');
    
    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');
    
    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');
    
    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('password.store');
});

Route::middleware(['auth'])->group(function () {
    Route::post('/Subscribe/{id}', [LicenseController::class, 'Subscribe'])->name('Subscribe');
    Route::get('/Enroll/{id}', [ClassController::class, 'Enroll'])->name('Enroll');
    Route::get('/unEnroll/{id}', [ClassController::class, 'unEnroll'])->name('unEnroll');
    Route::post('/UnSubscribe/{id}', [LicenseController::class, 'UnSubscribe'])->name('Unsubscribe');

});
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/Admin', [AdminController::class, 'index'])->name('Dashboard');
    Route::post('/School/add', [AdminController::class, 'Sstore'])->name('Spost');
    Route::post('/School/edit/{id}', [AdminController::class, 'Sedit'])->name('Sedit');
    Route::get('/schools', [AdminController::class, 'schools'])->name('Dashboard.school');
    Route::get('/school/{id}', [AdminController::class, 'Sdestroy'])->name('Sdelete');
    Route::get('/cours', [AdminController::class, 'cours'])->name('cours');
    Route::post('/cours/add', [AdminController::class, 'Cstore'])->name('addCour');
});


Route::middleware(['auth', 'administration'])->group(function () {
    Route::post('/detail/{id}/add', [AdministrationController::class, 'Dstore'])->name('Dpost');
    Route::post('/detail/edit/{id}', [AdministrationController::class, 'Dedit'])->name('Dedit');
    Route::post('/Certif/edit/{id}', [AdministrationController::class, 'Cedit'])->name('Cedit');
    Route::post('/Certificat/add', [AdministrationController::class, 'Cstore'])->name('Cpost');
    Route::get('/Administrator', [AdministrationController::class, 'index'])->name('ADashboard');
    Route::get('/certificat/{id}', [AdministrationController::class, 'detail'])->name('detail');
});

Route::middleware(['auth', 'prof'])->group(function () {
    Route::post('/Course/add', [CourseController::class, 'store'])->name('Cpost');
    Route::post('/Class/add', [ClassController::class, 'store'])->name('Clpost');
    Route::post('/Emploi/add/{id}', [EmploiController::class, 'store'])->name('Epost');
    Route::get('/Dashboard', [ProfController::class, 'dash'])->name('PDashboard');
    Route::get('/Dashboard/class', [ProfController::class, 'classes'])->name('PClass');
    Route::get('/Dashboard/class/{id}', [ProfController::class, 'class'])->name('SClass');
    Route::get('/Emploi/delete/{id}', [EmploiController::class, 'destroy'])->name('Edelete');
    Route::post('/student/delete/{id}', [ProfController::class, 'Sdelete'])->name('Detud');
});
Route::get('/', [StudentController::class, 'index'])->name('index');
Route::get('/prof/{id}', [ProfController::class, 'index'])->name('prof');
Route::get('/license/{id}', [LicenseController::class, 'get'])->name('license');
Route::middleware('auth')->get('/profile/{id}', [StudentController::class, 'profile'])->name('student');
Route::get('/course/{id}', [CourseController::class, 'index'])->name('course');
Route::get('/course', [CourseController::class, 'all'])->name('courses');
Route::get('/download/{id}', [CourseController::class, 'download'])->name('download');
Route::get('/prof/{id}/courses', [ProfController::class, 'courses'])->name('Pcourses');
Route::get('/sa/{id}', [SubjectController::class, 'Subject'])->name('SA');
Route::get('/sa/{id}/HS', [SubjectController::class, 'HS'])->name('HS');
Route::get('/sa/{id}/SC', [SubjectController::class, 'SC'])->name('SC');
Route::get('/class', [ClassController::class, 'stream'])->name('class');
Route::get('/license', [LicenseController::class, 'all'])->name('licenses');



Route::get('/logout', [AuthController::class, 'logout'])->name('logout');



