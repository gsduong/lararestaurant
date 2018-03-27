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
    return redirect('dashboard.html');
});

Route::get('/dashboard.html', ['as' => 'dashboard', function () {
    return view('dashboard.home');
}]);

Route::get('/icons.html', ['as' => 'icons', function () {
    return view('dashboard.icons');
}]);

Route::get('/maps.html', ['as' => 'maps', function () {
    return view('dashboard.maps');
}]);

Route::get('/notifications.html', ['as' => 'notifications', function () {
    return view('dashboard.notifications');
}]);

Route::get('/table.html', ['as' => 'table', function () {
    return view('dashboard.table');
}]);

Route::get('/typography.html', ['as' => 'typography', function () {
    return view('dashboard.typography');
}]);

Route::get('/user.html', ['as' => 'user', function () {
    return view('dashboard.user');
}]);
