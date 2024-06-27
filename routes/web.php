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

Route::get('/', function () {
    return view('welcome');
});

//DOPO LA CREAZIOEN DELLA PAGINA HOME NELLA CARTELLA VIEWS INDICO COSA SCRIVERCI NELL'URL PER APRIRE LA PAGINA 
Route::get('/stellaguida', function () {
    return view('home');
});
