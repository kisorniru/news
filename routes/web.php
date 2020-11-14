<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsAstronController;

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

Route::get('/export/{id}',  [NewsAstronController::class, 'export']);
Route::get('/edit/{id}',    [NewsAstronController::class, 'edit']);
Route::get('/numbersOnly',  [NewsAstronController::class, 'numbersOnly']);

Route::resource('/', NewsAstronController::class)
		->names([
		    'index' 	=> 'newsastrons.index',
		    'create' 	=> 'newsastrons.create',
		    'store' 	=> 'newsastrons.store',
		    'show' 		=> 'newsastrons.show',
		    'edit' 		=> 'newsastrons.edit',
		    'update' 	=> 'newsastrons.update',
		    'destroy' 	=> 'newsastrons.destroy'
		]);

// Route::resource('newsastrons', NewsAstronController::class);



