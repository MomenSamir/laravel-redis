<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redis;

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


Route::get('/publish', function () {

    Redis::set('mykey','hello');

    $response = Redis::get('mykey');

    echo $response;
    
    Redis::publish('test-channel', json_encode([
        'name' => 'Adam Wathan'
    ]));
});