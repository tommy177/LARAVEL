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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/menu', function () {
    include __DIR__ . "/../resources/views/index.php";
});

Route::get('/news', function () {
    include __DIR__ . "/../resources/views/News.php";
});

Route::get('/timeline', function () {
    include __DIR__ . "/../resources/views/Timeline.php";
});

Route::get('/project', function () {
    include __DIR__ . "/../resources/views/Project.php";
});
