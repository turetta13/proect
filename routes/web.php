<?php
Route::get('/', 'PageController@index');
Route::get('/acc', 'PageController@acc');
Route::get('/check', 'PageController@check');
Route::get('/contact', 'PageController@contact');
Route::get('/prod', 'PageController@prod');
Route::get('/single', 'PageController@single');

//Route::get('/', function () {
//    return view('index');
//});
//Route::get('/acc', function () {
//        return view('account');
//    });
//Route::get('', function () {
//    return view('checkout');
//});
//Route::get('/contact', function () {
//    return view('contact');
//});
//Route::get('/prod', function () {
//    return view('products');
//});
//Route::get('/single', function () {
//    return view('single');
//});