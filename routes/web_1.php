<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReviewController;
use App\Models\SpecialsMenu;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', function () {
    return view('pages/login/index');
});

Route::get('signup', function () {
    return view('pages/signup/index');
});

//Show comments
Route::get('reviews', [ReviewController::class, 'index']);

//Post new comment
Route::post('reviews', [ReviewController::class, 'store']);

//Report comment
Route::patch('reviews', [ReviewController::class, 'report']);

//Show single comment
Route::get('reviews/{id}', [ReviewController::class, 'show']);

//Edit page single comment
Route::get('reviews/{review}/edit', [ReviewController::class, 'edit'])->missing(function () {
    return redirect(dirname(request()->path()));
});

//Update Edited comment
Route::patch('reviews/{review}/edit', [ReviewController::class, 'update']);

//Delete page single comment
Route::get('reviews/{review}/delete', [ReviewController::class, 'delete'])->missing(function () {
    return redirect(dirname(request()->path()));
});

//Delete comment
Route::delete('reviews/{review}/delete', [ReviewController::class, 'destroy']);

//Homepage
Route::get('/home', [HomeController::class, 'index']);

