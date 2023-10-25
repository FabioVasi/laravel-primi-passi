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
    $name = 'Fabio';
    $lastName = 'Vasi';
    $message = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus placeat iure libero labore voluptatibus, facilis numquam enim odit, consequuntur quos dignissimos dicta perferendis incidunt sint nostrum aperiam iste consequatur delectus!';

    return view('home', compact('name', 'lastName', 'message'));
});