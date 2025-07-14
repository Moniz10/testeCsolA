<?php

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

use App\Http\Controllers\EventController;

Route::get('/',[EventController::class,'index']);
Route::get('/events/create',[EventController::class,'create'])->middleware('auth');
Route::post('/events',[EventController::class,'store']);
Route::get('/events/{id}',[EventController::class,'show']);
Route::get('/dashboard',[EventController::class,'dashboard'])->middleware('auth');
Route::delete('/events/{id}',[EventController::class,'destroy']);
Route::get('/events/edit/{id}',[EventController::class,'edit'])->middleware('auth');
Route::put('/events/update/{id}',[EventController::class,'update'])->middleware('auth');
Route::post('/events/join/{id}',[EventController::class,'joinEvent'])->middleware('auth');
Route::delete('/events/leave/{id}',[EventController::class,'leaveEvent'])->middleware('auth');


Route::get('/contacts', function () {
    return view('contacts');
});



Route::get('/contacts_ver/{id?}', function ($id=null) {                      //TRABALHAMOS COM ID

    //PODEMOS PEGAR O QUE A PESSOA PESQUISA USANDO A VARIAVEL VINDA DO PARAMETRO
    $busca=request('search');

    return view('contacts_ver',[
        'id'=>$id,
        'busca'=>$busca,                                                                      

    ]);
});


