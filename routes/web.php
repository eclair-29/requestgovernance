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

/* Sir Migz Routes */
/* requests (data list) route */
Route::get('/', 'ServiceRequestController@index');
Route::get('/requests', 'ServiceRequestController@create');
Route::get('/requests/{id}/edit', 'ServiceRequestController@edit');
Route::get('/requests/{id}', 'ServiceRequestController@show');

/* Sir Seus Routes */
Route::get('dashboard', function () {
    return view('admin.dashboard');
});

Route::get('Admin', function () {
    return view('rnd.AdminChoose');
});

Route::get('OnlineMIS', function () {
    return view('rnd.request');
});

Route::get('global', function () {
    return view('rnd.global');
});

Route::get('local', function () {
    return view('rnd.local');
});

Route::get('globalRequest', function () {
    return view('rnd.GlobalRequest');
});

Route::get('localRequest', function () {
    return view('rnd.LocalRequest');
});
