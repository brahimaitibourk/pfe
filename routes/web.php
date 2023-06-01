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
// Route::get('/a', function () {
//     return view('ppp/calendriens');
// });
Route::get('/homme', function () {
        return view('PPP/Homme');
    });
// Route::get('/m', function () {
//         return view('PPP/menu');
//     });
//     Route::get('/h', function () {
// //         return view('PPP/login');
//     });