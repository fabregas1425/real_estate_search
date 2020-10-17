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

Route::get('/top', function () {
    return view('top_page');
});
Route::get('/administrator', function () {
    return view('administrator');
});
Route::get('/browsing', function () {
    return view('browsing');
});
Route::get('/rental', function () {
    return view('property_information/rental');
});
Route::get('/recommend_rental', function () {
    return view('property_information/recommend_rental');
});
Route::get('/deal', function () {
    return view('property_information/deal');
});
Route::get('/recommend_deal', function () {
    return view('property_information/recommend_deal');
});