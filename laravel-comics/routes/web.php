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
/*
Route::get('/', function () {
    return view('homepage');
});
*/

Route::get('/', function (){
    include __DIR__ . '/../config/comics.php';
    return view('homepage', ["comics" => $comics]);
});

Route::get('/comic-detail/{id}', function ($id) {
    include __DIR__ . '/../config/comics.php';
    //$comics = config('comics');
    return view('comic-detail', ["comics" => $comics[$id]]);
});
