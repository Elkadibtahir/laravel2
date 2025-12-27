<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);

Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register.post');

Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])
    ->middleware('throttle:5,1'); // 5 attempts per minute

Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])
    ->middleware('throttle:3,1'); // 3 registrations per minute
    
Route::resource('classes', ClasseController::class);
Route::resource('exams', ExamController::class);
Route::resource('modules', ModuleController::class);
Route::resource('notes', NoteController::class);
Route::resource('sessions', SessionController::class);
Route::resource('students', StudentController::class);
Route::resource('teachers', TeacherController::class);
Route::resource('users', UserController::class);


// Protected dashboard routes
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        $user = Auth::user();
        switch ($user->role) {
            case 'student':
                return redirect()->route('student.dashboard');
            case 'prof':
                return redirect()->route('teacher.dashboard');
            case 'admin':
                return redirect()->route('admin.dashboard');
            default:
                return redirect('/');
        }
    })->name('dashboard');

    Route::get('/dashboard/student', [App\Http\Controllers\StudentController::class, 'dashboard'])->middleware('role:student')->name('student.dashboard');
    Route::get('/dashboard/teacher', [App\Http\Controllers\TeacherController::class, 'dashboard'])->middleware('role:prof')->name('teacher.dashboard');
    Route::get('/dashboard/admin', [App\Http\Controllers\UserController::class, 'dashboard'])->middleware('role:admin')->name('admin.dashboard');
});
