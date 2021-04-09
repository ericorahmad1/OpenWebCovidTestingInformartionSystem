<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\TesterController;

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
    return redirect('/login');
});


Auth::routes();


// After login
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');

Route::get('/pickLevel', [HomeController::class, 'formPick'])->name('pickLevel');
Route::post('/pickLevel',  [HomeController::class, 'Pick'])->name('pick');

Route::prefix('Tester')->middleware(['middleware' => 'role:Tester'])->group(function () {
    Route::get('/', function () {
        return view('/Tester/home');
    });
    Route::get('/home', [HomeController::class, 'testerHome'])->name('testerHome');
    Route::get('/test/', [TesterController::class, 'covidTest'])->name('covidTest');
    Route::get('/test/new', [TesterController::class, 'newTest'])->name('newTest');
    Route::post('/test/new', [TesterController::class, 'saveTest'])->name('saveTest');

    Route::get('/test/result/{id}', [TesterController::class, 'newResult'])->name('newResult');
    Route::post('/test/result/{id}', [TesterController::class, 'saveResult'])->name('saveResult');
});

Route::prefix('Patient')->middleware(['middleware' => 'role:Patient'])->group(function () {
    Route::get('/', function () {
        return view('/Patient/home');
    });
    Route::get('/home', [HomeController::class, 'patientHome'])->name('patientHome');
    Route::get('/test/', [PatientController::class, 'covidTest'])->name('covidTest');
});
