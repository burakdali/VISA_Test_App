<?php

use App\Http\Controllers\EmailController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\VisaApplicationController;
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

Route::get('/', [ProfileController::class, 'homeNavigator']);
Route::middleware(['auth', 'admin'])->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/users', [UsersController::class, 'index'])->name('index');
    Route::post('/sendInitialEmail', [EmailController::class, 'sendInitialEmail'])->name('sendInitialEmail');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/emailMessages', [EmailController::class, 'emailMessages'])->name('emailMessages');
    Route::get('/firstPage', [VisaApplicationController::class, 'firstPage'])->name('firstPage');
    Route::get('/secondPage', [VisaApplicationController::class, 'secondPage'])->name('secondPage');
    Route::get('/thirdPage', [VisaApplicationController::class, 'thirdPage'])->name('thirdPage');
    Route::get('/previewPage', [VisaApplicationController::class, 'previewPage'])->name('previewPage');
    Route::post('/saveApplication', [VisaApplicationController::class, 'saveApplication'])->name('saveApplication');
    Route::post('/storeImages', [VisaApplicationController::class, 'storeImages'])->name('storeImages');
});

require __DIR__ . '/auth.php';
