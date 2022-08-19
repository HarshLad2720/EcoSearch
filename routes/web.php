<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactUsController;
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

Route::get('/',[HomeController::class,"index"]);
Route::get('/area',[HomeController::class,"areas"]);
Route::get('/team',[HomeController::class,"teams"]);
Route::get('/candidate',[HomeController::class,"candidates"]);
Route::get('/contact',[HomeController::class,"contacts"]);

Route::resource('contactus', ContactUsController::class);
Route::resource('candidates', \App\Http\Controllers\CandidatesController::class);
Route::resource('teams', \App\Http\Controllers\TeamsController::class);

Route::get('/users',[\App\Http\Controllers\AdminUserController::class,"index"]);
Route::get('/user-delete/{id}',[\App\Http\Controllers\AdminUserController::class, "destroy"]);
Route::post('/team-store', [\App\Http\Controllers\AdminUserController::class,"storeTeam"]);

Route::get('/contactus-list', [\App\Http\Controllers\ContactUsController::class,"allContact"]);
Route::get('/contact-delete/{id}', [\App\Http\Controllers\ContactUsController::class,"destroy"]);

Route::get('/candidate-list', [\App\Http\Controllers\CandidatesController::class,"index"]);
Route::get('/candidate-delete/{id}',[\App\Http\Controllers\CandidatesController::class, "destroy"]);

Route::get('/team-list', [\App\Http\Controllers\TeamsController::class,"index"]);
Route::get('/teams-list', [\App\Http\Controllers\TeamsController::class,"allList"]);
Route::get('/teams-delete/{id}',[\App\Http\Controllers\TeamsController::class, "destroy"]);


Route::get('/redirects',[HomeController::class,"redirects"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
