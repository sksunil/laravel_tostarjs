<?php

Route::get('/', function() {
    return view('notify');
});
Route::post('z','NotificationController@index');

Route::get('se','NotificationController@se');

