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
    $data = [
        'name'=> 'Fulvio',
        'surname'=> 'Amati',
        'info' => [
            'fulvioamati@gmail.com',
            '+39 3563452339',
            'via del Tornio Girevole 4'
        ]
    ];
    return view('home',$data);
});
