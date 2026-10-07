<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',function(){
    return view('login');
});

Route::get('/inicio',function(){
    return view('Sistema Academico');
});

Route::get('/Nosotros',function(){
    return view('Nosotros');
});