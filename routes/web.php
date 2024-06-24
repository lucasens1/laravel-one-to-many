<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')
    ->prefix('admin') //Semplicemente il prefisso nell'url delle rotte di questo gruppo
    ->name('admin.') // Inizio di OGNI nome delle rotte del gruppo quindi 'dashboard' sotto diviene 'admin.dashboard' quindi tutte le rotte protette da auth inizieranno con 'admin.' 
    ->group(function() {
        Route::get('/',[DashboardController::class,'index'])->name('dashboard');
        Route::resource('projects', ProjectController::class)->parameters(['project'=>'project:slug']);
});

require __DIR__.'/auth.php';
