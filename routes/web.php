<?php

Route::get('/', 'SheepController@index');
Route::post('SheepController/addOne', 'SheepController@addOne');
Route::post('SheepController/deleteOne', 'SheepController@deleteOne');
Route::get('/report', 'ReportController@index');
Route::post('report/', 'ReportController@quarter');
