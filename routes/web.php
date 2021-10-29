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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';





Route::get('/template',['uses'=>'Controller@template','as'=>'template.template']);
Route::get('/accueil',['uses'=>'Controller@accueil','as'=>'accueil.accueil']);
Route::get('/profile',['uses'=>'Controller@profile','as'=>'profile.profile']);
Route::get('/discussion',['uses'=>'Controller@discussion','as'=>'discussion.discussion']);
Route::get('/registerr',['uses'=>'Controller@registerr','as'=>'registerr.registerr']);
Route::get('/loginn',['uses'=>'Controller@loginn','as'=>'loginn.loginn']);
Route::get('/invitation',['uses'=>'Controller@invitation','as'=>'invitation.invitation']);
Route::get('/comment',['uses'=>'Controller@comment','as'=>'comment.comment']);
Route::get('/publier',['uses'=>'Controller@publier','as'=>'publier.publier']);
