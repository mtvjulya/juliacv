<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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
//Auth::routes();
//Route::get('/', function () {
//    return view('welcome');
//});



Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');
Route::post('/changeLang', [App\Http\Controllers\WelcomeController::class, 'changeLang'])->name('changeLang');
//Route::post('change-lang',[HomeController::class,'changeLang'])->name('change-lang')->middleware('auth');
//Route::post('/projects', [App\Http\Controllers\ProjectsController::class, 'projectsHome'])->name('projects');
Route::get('/projects', function () {
    return App\Models\Project::all();
});
Route::get('/projects-ru', function () {
    return App\Models\ProjectsRu::all();
});
