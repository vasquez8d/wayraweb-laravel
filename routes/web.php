<?php

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
    return view('index');
});

Route::get('/contacto', function () {
    return view('contacto');
});
Route::get('/productos', function () {
    return view('productos');
});
Route::get('/galeria', function () {
    return view('galeria');
});
Route::get('/control-aviar', function () {
    return view('service1');
});
Route::get('/exhibiciones', function () {
    return view('service2');
});
Route::get('/publicidad', function () {
    return view('service3');
});
Route::get('/rptamail', function () {
    return view('mail');
});

Route::post('sendmail','MailController@send_mail');
