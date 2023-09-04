<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


/*    Route::get('/', 'App\Http\Controllers\PrincipalController@principal');
    Route::get('/sobrenos', 'App\Http\Controllers\SobreNosController@principal');
    Route::get('/', 'App\Http\Controllers\ContatoController@principal');

    Route::get('/contato/{nome?}/{mensagem?}' ,
        function(string $nome, string $mensagem - 'sem texto')
        {echo "passagem de parametros via browser: $nome - mensagem";}
); */


/*
        ========
        SECOND
        ========
*/

/*
Route::get('/', function () {
    return 'AULA DE PW III';
});

Route::get('/quemsomos', function () {
    return 'Quem somos?';
});

Route::get('/contato', function () {
    return 'Contato';
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
}); */

/*
        =======
         FIRST
        =======
*/


/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});*/

require __DIR__.'/auth.php';
