<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// http://www.saimok.com/2015/06/03/view-blade-%E0%B9%83%E0%B8%99-laravel-5/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/member', function () {
    $sub = Input::get('sub', '');
    if ($sub != 'search' && $sub != 'add') {
        $sub = 'search';
    }

    return view('member', ['sub' => $sub]);
});
