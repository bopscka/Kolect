<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/accueil', function () {
    return view('accueil');
});

Route::get('/epa', function () {
    return view('epargne/acc');
});

// les routes seront regroupées par module

    Route::prefix('/epargne')->group(function () {
        //ici les routes relative au module epargne

        Route::get('/create', 'App\Http\Controllers\Epargne\epargneController@create');
        Route::get('/',"App\Http\Controllers\Shop\MainController@index")->name('homepage');

        //ici aussi, vous pourrez organiser comme bon vous semble

    });



    Route::prefix('/association')->group(function () {
        //ici les routes relative au module association

        //ici aussi, vous pourrez organiser comme bon vous semble

    });

    Route::prefix('/user')->group(function () {
        //ici les routes relative au module utilisateur

        //ici aussi, vous pourrez organiser comme bon vous semble

    });


    Route::prefix('/administrateur')->group(function () {
        //ici les routes relative au module administrateur

    });



    Route::prefix('/membre')->group(function () {
        //ici les routes relative au module membre

        //ici aussi, vous pourrez organiser comme bon vous semble

    });


