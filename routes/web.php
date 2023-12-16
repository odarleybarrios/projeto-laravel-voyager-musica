<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

Route::get('/', function (Request $request) {
    $filtro = "%{$request ->nome}%";
    //busca todos os registros da tabela artistas
    $artistas = App\Models\Artista::where('nome','LIKE',$filtro)->get();

    return view('welcome',compact('artistas'));
})->name('welcome');

Route::get('/musicas', function (Request $request) {
    $filtro = "%{$request ->titulo}%";
    //busca todos os registros da tabela artistas
    $musicas = App\Models\Musica::where('titulo','LIKE',$filtro)->get();
    return view('musicas.index',compact('musicas'));
})->name('musicas');

Route::get('/playlists', function (Request $request) {
    $filtro = "%{$request ->nome}%";
    //busca todos os registros da tabela artistas
    $playlists = App\Models\Playlist::where('nome','LIKE',$filtro)->get();
    return view('playlists.index',compact('playlists'));
})->name('playlists');


Route::get('/musica/{id}', function ($id) {
    //busca todos os registros da tabela musicas com oid = $id
    $musica = App\Models\Musica::find($id);
    return view('musicas.show',compact('musica'));
})->name('musicas.show');



Route::get('/playlist/{id}', function ($id) {
    //busca todos os registros da tabela playlists com oid = $id
    $playlist = App\Models\Playlist::find($id);
    return view('playlists.show',compact('playlist'));
})->name('playlists.show');




Route::get('/artista/{id}', function ($id) {
    //busca todos os registros da tabela artistas com oid = $id
    $artista = App\Models\Artista::find($id);

    return view('artistas.show',compact('artista'));
})->name('artista.show');


Route::get('/palestras', function () {
   $titulo = 'Palestras';
   //buscar todos os registros da tabela posts
   $postagens = App\Models\Post::all();
   //retorna para a página 'palestras' com as variaveis
    return view('palestras',compact('titulo','postagens'));
})->name('palestras');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
