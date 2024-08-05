<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\QuestionController;
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

Route::get('/', function () {
    return view('admin/admin_login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//admin routes
Route::middleware(['auth', 'role:admin'])->group(function (){
    Route::get('/admin/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/logout', [HomeController::class, 'adminLogout'])->name('admin.logout');
    Route::get('/admin/survey', [SurveyController::class, 'survey_show'])->name('admin.survey');
    //Route::get('/admin/survey/details', [SurveyController::class, 'survey_details'])->name('admin.survey_details');
    Route::get('/admin/survey/create', [SurveyController::class, 'survey_create'])->name('admin.survey_create');
    //Route::post('/admin/survey/store', [SurveyController::class, 'survey_store'])->name('admin.survey_store');
    //Route::get('/admin/survey/edit', [SurveyController::class, 'survey_edit'])->name('admin.survey_edit');
    //Route::get('/admin/survey/delete', [SurveyController::class, 'survey_delete'])->name('admin.survey_delete');
});

Route::get('/admin/login', [HomeController::class, 'adminLogin'])->name('admin.login');
//survey
Route::post('/survey/post', [SurveyController::class, 'surveyStore'])->name('survey.store');
Route::get('/survey/details/{id}', [SurveyController::class, 'survey_details'])->name('survey_details');
Route::get('/survey/edit/{id}', [SurveyController::class, 'surveyEdit'])->name('survey_edit');
Route::post('/survey/update', [SurveyController::class, 'surveyUpdate'])->name('survey_update');
Route::get('/survey/delete/{id}', [SurveyController::class, 'survey_delete'])->name('survey_delete');
//frontend
Route::get('/survey/form', [SurveyController::class, 'surveyForm'])->name('survey.form');





//question
Route::get('/question/create/{id}', [QuestionController::class, 'question_create'])->name('question.question_create');
Route::post('/question/store/{id}', [QuestionController::class, 'store'])->name('question.store');


//user routes
Route::middleware(['auth', 'role:user'])->group(function (){
    Route::get('/user/dashboard', [HomeController::class, 'store'])->name('user.dashboard');
    Route::get('/user/logout', [HomeController::class, 'userLogout'])->name('user.logout');
});


//registration
//Route::get('/admin/registration', [HomeController::class, 'adminRegistration'])->name('admin.registration');
//Route::Post('/admin/registration', [HomeController::class, 'registration'])->name('admin.registration');


Route::get('/admin/registration', [HomeController::class, 'showRegistrationForm'])->name('admin.registration');
Route::post('/admin/registration', [HomeController::class, 'store'])->name('admin.register');




