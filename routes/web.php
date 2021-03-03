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

Route::resource('alunos', 'Site\AlunosController',
    [
        'names' =>[
            'index' =>'alunos',
            'create' =>'cad-alunos'
        ]
    ]


);


####################### Site Controller ##################
Route::get('/', 'Site\SiteController@index');
