<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

/* ########################### */

Route::get('/template',['uses'=>'Controller@template','as'=>'template.template']);
Route::get('/accueil',['uses'=>'Controller@accueil','as'=>'accueil.accueil']);
Route::get('/profile',['uses'=>'Controller@profile','as'=>'profile.profile']);
Route::get('/discussion',['uses'=>'Controller@discussion','as'=>'discussion.discussion']);
Route::get('/register',['uses'=>'Controller@register','as'=>'register.register']);
Route::get('/login',['uses'=>'Controller@login','as'=>'login.login']);
Route::get('/invitation',['uses'=>'Controller@invitation','as'=>'invitation.invitation']);
Route::get('/comment',['uses'=>'Controller@comment','as'=>'comment.comment']);