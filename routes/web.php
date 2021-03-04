<?php


use Illuminate\Support\Facades\Route;
use phpDocumentor\Reflection\Types\Resource_;

include('admin.php');
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/admin', 'HomeController@index');


####################### Alunos Controller ##################
Route::resource('alunos', 'Site\AlunoController');




####################### Site Controller ##################
Route::get('/', 'Site\SiteController@index')->name('home');
Route::get('/aulas','Site\SiteController@aulas')->name('aulas');
Route::get('/contato','Site\SiteController@contato')->name('contato');
Route::get('/sobre-nos','Site\SiteController@sobre')->name('sobrenos');