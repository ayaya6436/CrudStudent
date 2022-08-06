<?php

use App\Http\Controllers\EtudiantController;
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
// route welcome page

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// route student page
Route:: get('/etudiant',[EtudiantController::class ,'index'])->name('student');
Route:: get('/etudiant/{etudiant}',[EtudiantController::class ,'edit'])->name('etudiant.edit');
// route student add page
Route:: get('/etudiant/create',[EtudiantController::class ,'create'])->name('student.create'); 

Route:: post('/etudiant/create',[EtudiantController::class ,'store'])->name('student.add'); 
Route:: delete('/etudiant/{etudiant}',[EtudiantController::class ,'delete'])->name('etudiant.supprimer'); 
Route:: put('/etudiant/{etudiant}',[EtudiantController::class ,'update'])->name('etudiant.update'); 
