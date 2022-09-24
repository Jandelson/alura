<?php

use App\Mail\TestSend;
use Illuminate\Support\Facades\Mail;
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


Route::get('/email', function() {
    $usuarios = [
        ['nome' => 'Jandelson', 'email' => 'jandelson@jandelson.com.br'],
        ['nome' => 'Julio', 'email' => 'julio@jandelson.com.br'],
        ['nome' => 'Helena', 'email' => 'helena@jandelson.com.br'],
        ['nome' => 'Teste', 'email' => 'teste@jandelson.com.br'],
        ['nome' => 'Joao', 'email' => 'joao@jandelson.com.br'],
        ['nome' => 'Nina', 'email' => 'nina@jandelson.com.br'],
    ];

    foreach ($usuarios as $usuario) {
        $mail = new TestSend($usuario['nome']);
        Mail::to($usuario['email'])->queue($mail);
    }
});