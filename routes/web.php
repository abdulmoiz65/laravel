<?php

use Illuminate\Support\Facades\Route;

Route::get('welcome', function () {
    return view('welcome');
});

route::view('/','post');

route::get('/postpara/{a}',function(string $a){
    return '<h1>post ID :' .$a.'</h1>';
});


route::get('named-route',function(){
    return view('namedRoute');
})->name('namedroute');


// GROUP ROUTE 
Route::prefix('pages')->group(function () {
    Route::get('/a', function () {
        return view('pages/a');
    });

    Route::get('/b', function () {
        return view('pages/b');
    });

    Route::get('/c', function () {
        return view('pages/c');
    });
});

// to avoid auto 404 page from laravel and build your own 
route::fallback(function(){
    return '404 page not found';
});
