<?php

use Illuminate\Support\Facades\Route;

// Langkah 2: Route Hello
Route::get('/hello', function () {
    return 'Hello World';
});

// Langkah 4: Route World
Route::get('/world', function () {
    return 'World';
});

// Langkah 6: Route Selamat Datang
Route::get('/', function () {
    return 'Selamat Datang';
});

// Langkah 7: Route About (NIM dan Nama)
Route::get('/about', function () {
    return 'NIM: 244107020051 <br> Nama: Fanani'; 
});

// Langkah 8: Satu parameter
Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
});

// Langkah 11: Dua parameter
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

// Langkah 13: Tugas Mandiri
Route::get('/articles/{id}', function ($id) {
    return "Halaman Artikel dengan ID " . $id;
});

// Langkah 14: Default null
Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya '.$name;
});

// Langkah 17: Default dengan nama 'Fanani'
Route::get('/user/{name?}', function ($name='Fanani') {
    return 'Nama saya '.$name;
});