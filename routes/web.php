<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;


// Langkah 2: Route Hello
Route::get('/hello', [WelcomeController::class, 'hello']);

// Langkah 4: Route World
Route::get('/world', function () {
    return 'World';
});

// Langkah 7: Modifikasi dengan Single Action Controller
Route::get('/', HomeController::class);
Route::get('/about', AboutController::class);
Route::get('/articles/{id}', ArticleController::class);

// Langkah 8: Satu parameter
Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
});

// Langkah 11: Dua parameter
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

// Langkah 14: Default null
Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya '.$name;
});

// Langkah 17: Default dengan nama 'Fanani'
Route::get('/user/{name?}', function ($name='Fanani') {
    return 'Nama saya '.$name;
});

Route::resource('photos', PhotoController::class)->only([ 
'index', 'show' 
]); 

Route::resource('photos', PhotoController::class)->except([ 
'create', 'store', 'update', 'destroy' 
]);