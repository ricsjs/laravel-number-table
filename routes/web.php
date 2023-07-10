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
    return view('home');
});

Route::get('/tabuada/{num}', function ($num) {
    echo "<h2>Tabuada do número $num</h2>";
    for($i = 0; $i<=10; $i++) {
        echo "<p>$i X $num = " .$i*$num."</p>";
    }
});
