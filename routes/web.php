<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContentController;
use Illuminate\Support\Facades\Artisan;

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
Route::group(['middleware' => 'guest'], function(){

    Route::get('/', function () {
        return view('home');
    })->name('home');

    Route::get('/ikafti/form-register', [AlumniController::class, 'alumniRegister'])->name('alumniRegister');
    Route::get('/ikafti/list-alumni', [AlumniController::class, 'listAlumni'])->name('listAlumni');
    Route::get('/ikafti/tentang-kami', [AlumniController::class, 'tentangkami'])->name('tentangkami');

    Route::get('/ikafti/karir', [AlumniController::class, 'karir'])->name('karir');
    Route::get('/ikafti/karir/{id}', [AlumniController::class, 'karirDetail'])->name('karirDetail');

    Route::get('/ikafti/information', [AlumniController::class, 'information'])->name('information');
    Route::get('/ikafti/information/{id}', [AlumniController::class, 'informationDetail'])->name('informationDetail');

    Route::get('/ikafti/agenda', [AlumniController::class, 'agenda'])->name('agenda');
    Route::get('/ikafti/agenda/{id}', [AlumniController::class, 'agendaDetail'])->name('agendaDetail');
});

Route::group(['middleware' => 'auth'], function(){
    Route::get('dashboard', function(){
        if(auth()->user()->role_id == 1){
            return redirect()->route('DashboardSA');
        }elseif(auth()->user()->role_id == 2){
            return redirect()->route('DashboardAdmin');
        }else{
            abort(404);
        }
    });
    // Super Admin
    Route::get('/ikafti/Dashboard-SA', [SuperAdminController::class, 'Dashboard'])->name('DashboardSA');
    // Admin
    Route::get('/ikafti/Dashboard-Admin', [AdminController::class, 'Dashboard'])->name('DashboardAdmin');

    Route::post('/image_upload', [ContentController::class, 'uploadImage'])->name('image_upload');
    // Content
    Route::get('/ikafti/add-content', [ContentController::class, 'addContent'])->name('addContent');
    Route::post('/ikafti/add-content', [ContentController::class, 'store'])->name('addContent.store');
    Route::get('/ikafti/edit-content/{id}', [ContentController::class, 'editContent'])->name('editContent');
    Route::patch('/ikafti/edit-content/{id}', [ContentController::class, 'updateContent'])->name('editContent.update');
    Route::get('/ikafti/informations/{id}', [ContentController::class, 'informationDetails'])->name('informationDetails');
    Route::get('/ikafti/karirs/{id}', [ContentController::class, 'karirDetails'])->name('karirDetails');
});
Route::get('/ikafti-storage-link', function () {
    Artisan::call('storage:link');
});




