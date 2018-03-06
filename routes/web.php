<?php

Route::get('/', function () {return view('index');});

Route::get('/precision-planting', function() {return view('layouts.planting');});

Route::get('/pioneer', function() {return view('layouts.pioneer');});

Route::get('/farming', function() {return view('layouts.farming');});

Route::get('/seed-treatment', function() {return view('layouts.treatment');});

Route::get('/crop-insurance', function() {return view('layouts.insurance');});

Route::get('/employees', function() {return view('layouts.employees');});

Route::get('/contact-us', 'ContactController@create')->name('contact.create');

Route::post('/contact-us', 'ContactController@send')->name('contact.send');