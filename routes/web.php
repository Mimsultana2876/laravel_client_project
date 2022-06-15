<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clientTypeController;
use App\Http\Controllers\delete;
use App\Http\Controllers\clientInfoController;
use App\Http\Controllers\ProjectController;

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
    return view('index');
});
// Route::get('/show_client_type', [clientTypeController::class,'show'])->name('show_client_type');
Route::prefix('admin')->group( function () {

    // client type
    Route::get('/show_client_type', [clientTypeController::class,'show'])->name('show_client_type');
    Route::post('/insert_client_type', [clientTypeController::class,'insert'])->name('insert_client_type');
    Route::get('/update_page_client_type/{id}', [clientTypeController::class,'update_page']);
    Route::put('/update_client_type/{id}', [clientTypeController::class,'update']);

    // Client Information
    Route::get('/show_client_info', [clientInfoController::class,'show']);
    Route::post('/insert_client_info', [clientInfoController::class,'insert']);
    Route::put('/update_client_info', [clientInfoController::class,'update']);
    // Route::put('/update_client_info/{id}', [clientInfoController::class,'update']);
    Route::delete('/delete/{model}/{id}', [delete::class,'deletes']);
    Route::get('/client_info_ajax/{id}', [ProjectController::class,'ajax']);
    // Project Information
    
    Route::post('/insert_project_info', [ProjectController::class,'insert']);
    
    Route::get('/show_project_info', [ProjectController::class,'show']);
    Route::get('/show_domain_info', [ProjectController::class,'show_domain']);
    Route::get('/show_hosting_info', [ProjectController::class,'show_hosting']);
    Route::get('/show_other_project_info', [ProjectController::class,'show_other_project']);
    Route::put('/update_project_info', [ProjectController::class,'update']);

    




   
});

