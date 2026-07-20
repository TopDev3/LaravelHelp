<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cv.pdf', function () {
    return response()->file(resource_path('files/Andres-Pineda-CV.pdf'), [
        'Content-Disposition' => 'inline; filename="Andres Pineda - CV.pdf"',
    ]);
});
