<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerPatient;

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

Route::get('/patient', [ControllerPatient::class, 'index'])->name('patient.index');

//Patients
//Create
Route::get('/patient/create', [ControllerPatient::class, 'create'])->name('patient.create');
Route::post('/patient', [ControllerPatient::class, 'store'])->name('patient.store'); 