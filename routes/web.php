<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\locataire\LocataireController;
use App\Http\Controllers\appartement\AppartementController;

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
    return view('welcome');
});

//Route::get('/home', function(){
//  return view('home');
//})->middleware('auth');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



route::middleware('auth','isAdmin')->group(function(){
  //locataire management
  Route::get('/meslocataires', [LocataireController::class,'Index'])->name('index');
  Route::get('/ajouter-locataire', [LocataireController::class,'AddLocataire']);
  Route::post('insert-locataire', [LocataireController::class,'InsertLocataire']);
  Route::get('/modifier-locataire/{id}', [LocataireController::class,'EditLocataire']);
  Route::post('update-locataire/{id}', [LocataireController::class,'UpdateLocataire'])->name('updatelocataire');
  Route::get('/delete-locataire/{id}', [LocataireController::class,'DeleteLocataire']);

  //appartement  management

  Route::get('/mesappartements', [AppartementController::class,'AppIndex'])->name('appindex');
  Route::get('/ajouter-apparte', [AppartementController::class,'AddAppartement']);
  Route::post('insert-apparte', [AppartementController::class,'InsertAppartement']);
  Route::get('/modifier-apparte/{id}', [AppartementController::class,'EditAppartement']);
  Route::post('update-apparte/{id}', [AppartementController::class,'UpdateAppartement'])->name('updateappartement');
  Route::get('/delete-apparte/{id}', [AppartementController::class,'DeleteAppartement']);
});
