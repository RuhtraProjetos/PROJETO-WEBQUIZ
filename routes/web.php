<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/start', function () {
    return view('pages.start.start');
});
Route::get('/profile/signin', function () {
    return view('pages.profile.profile_signin');
});
Route::get('/profile/signup', function () {
    return view('pages.profile.profile_signup');
});
Route::get('/quiz', function () {
    return view('pages.quiz.quiz');
});
Route::get('/quiz/entrepreneurProfileTest', function () {
    return view('pages.quiz.entrepreneurProfileTest.entrepreneurProfileTest');
});
Route::get('/quiz/entrepreneurProfileTest/01', function () {
    return view('pages.quiz.entrepreneurProfileTest.entrepreneurProfileTest01');
});
Route::get('/quiz/entrepreneurProfileTest/02', function () {
    return view('pages.quiz.entrepreneurProfileTest.entrepreneurProfileTest02');
});
