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
    return view('welcome');
});

route::get('/user', function () {
    return 'hello woong';
});

route::get('/siswa/{id}', function($id) {
    return "hello word ". $id;
});

route::get('/guru/{id?}', function($id=null) {
    return 'hello guru '.$id;
});

route::get('/siswa', function() {
    return view('siswa');
});

route::get('/guru', function() {
    return view('guru');
});

route::get('/admin', function() {
    return view('admin');
});

route::get('/admin/{id}', function($id) {
    return "hello admin ". $id;
});