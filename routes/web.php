<?php

Route::get('/', function () {return view('index');});

Route::get('/Precision-Planting', function() {return view('layouts.planting');});

Route::get('/Pioneer', function() {return view('layouts.pioneer');});

Route::get('/Custom-Farming', function() {return view('layouts.farming');});

Route::get('/Seed-Treatment', function() {return view('layouts.treatment');});

Route::get('/Crop-Insurance', function() {return view('layouts.insurance');});

Route::get('/Employees', function() {return view('layouts.employees');});

Route::get('/Contact-Us', function() {return view('layouts.contact');});

