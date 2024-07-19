<?php

use App\Http\Controllers\indexController;
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
    return view('home');
})->name('index');


Route::get(
    '/Quem-Somos',
    [indexController::class, 'about']
)->name('about');

Route::get(
    '/Ajude/Doacao',
    function () {
        return view('pages.help.doacao');
    }
)->name('daocao');

Route::get(
    '/Ajude/Notas-Fiscais',
    function () {
        return view('pages.help.notas');
    }
)->name('notas');

Route::get(
    '/Ajude/Seja-Um-Parceiro',
    function () {
        return view('pages.help.parceiro');
    }
)->name('parceiro');


Route::get(
    '/Parceiros',
    function () {
        return view('pages.parceiros');
    }
)->name('parceiros');


Route::get(
    '/Transparência',
    [indexController::class, 'transparencia']
)->name('transparencia');
