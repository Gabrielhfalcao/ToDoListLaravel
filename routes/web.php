<?php

Route::get('/', function () {
    return view('home');
});

Route::get('/list-task', 'App\Http\Controllers\ApplicationController@list_user_tasks')->name('list_user_task');

Route::get('/new-task', function () {
    return view('new-task');
});

Route::post('/new-task', 'App\Http\Controllers\ApplicationController@create_user_task')->name('create_user_task');
