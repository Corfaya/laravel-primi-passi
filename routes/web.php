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
    $msgg = "Hello World!";
    return view('home', compact('msgg'));
})->name('homepage');

Route::get('/products', function () {
    $title = "I nostri prodotti";
    $items = [
        "Lorem",
        "Ipsum",
        "Dolor",
        "Sit Amet",
        "Eccetera",
        "Test"
    ];
    return view('products', compact('title', 'items'));
})->name('products');

Route::get('/about', function () {
    $data = [
        "title" => "Chi siamo?",
        "paragraph" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus, consequatur. Numquam dolore quod et laboriosam? Quidem error fugiat deserunt odit, quos quod exercitationem sapiente, sunt dolorem quam iure vitae cum! Et amet consectetur adipisicing elit. Iure rerum temporibus, fugiat, illum at iste sapiente voluptatibus explicabo porro animi, eum corporis. Temporibus doloremque, odio ipsam maiores ratione sunt officiis."
    ];
    return view('about', $data);
})->name('about-us');

Route::get('/contacts', function () {
    $data = [
        "title" => "Entra in contatto con noi!",
        "paragraph" => "Compila questo rapido form"
    ];
    return view('contacts', $data);
})->name('contact-us');
