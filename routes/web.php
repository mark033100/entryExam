<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerPatient;
use App\Http\Controllers\ControllerAdmission;

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

//Route to Patient Page
Route::get('/patient', [ControllerPatient::class, 'index'])->name('patient.index');

//Route to Admission Page
Route::get('/admission', [ControllerAdmission::class, 'index'])->name('admission.index');



//Patients
//Create
Route::get('/patient/create', [ControllerPatient::class, 'create'])->name('patient.create');
Route::post('/patient', [ControllerPatient::class, 'store'])->name('patient.store'); 

//Update
Route::get('/patient/{patient}/edit', [ControllerPatient::class, 'edit'])->name('patient.edit'); 
Route::put('/patient/{patient}/update', [ControllerPatient::class, 'update'])->name('patient.update'); 

//Delete
Route::delete('/patient/{patient}/delete', [ControllerPatient::class, 'delete'])->name('patient.delete'); 


/*====================================================================================================*/

//Admissions
//Create
Route::get('/admission/create', [ControllerAdmission::class, 'create'])->name('admission.create');
Route::post('/admission', [ControllerAdmission::class, 'store'])->name('admission.store'); 

//Update
Route::get('/admission/{admission}/edit', [ControllerAdmission::class, 'edit'])->name('admission.edit'); 
Route::put('/admission/{admission}/update', [ControllerAdmission::class, 'update'])->name('admission.update'); 

//Delete
Route::delete('/admission/{admission}/delete', [ControllerAdmission::class, 'delete'])->name('admission.delete');