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

Route::get('/contacts', function ()
    {
        return view('welcome');
        Route::resource('Contacts', 'ContactsController');
    }
);
Route::get('/career', function ()
    {
        return view('welcome');
        Route::resource('Career', 'CareerController');
    }
);
Route::get('/hard_skills', function ()
    {
        return view('welcome');
        Route::resource('Hard_Skills', 'Hard_SkillsController');
    }
);