<?php


use Illuminate\Support\Facades\Route;

/** @noinspection PhpUndefinedMethodInspection */
Route::group(['prefix' => ''], function () {

    /** @noinspection PhpUndefinedMethodInspection */
    Route::get('', function () {
        return redirect('/characters');
    });
    /** @noinspection PhpUndefinedMethodInspection */
    Route::get('/lang', ['uses' => 'Controller@changeLang', 'as' => 'changeLang']);
    /** @noinspection PhpUndefinedMethodInspection */
    Route::get('characters', ['uses' => 'Controller@characters', 'as' => 'characters']);
    /** @noinspection PhpUndefinedMethodInspection */
    Route::get('secondaryCharacters', ['uses' => 'Controller@secondaryCharacters', 'as' => 'secondaryCharacters']);
    /** @noinspection PhpUndefinedMethodInspection */
    Route::get('enemies', ['uses' => 'Controller@enemies', 'as' => 'enemies']);
    /** @noinspection PhpUndefinedMethodInspection */
    Route::get('materia', ['uses' => 'Controller@materia', 'as' => 'materia']);
    /** @noinspection PhpUndefinedMethodInspection */
    Route::get('weapons', ['uses' => 'Controller@weapons', 'as' => 'weapons']);
    /** @noinspection PhpUndefinedMethodInspection */
    Route::get('songs', ['uses' => 'Controller@songs', 'as' => 'songs']);
    /** @noinspection PhpUndefinedMethodInspection */
    Route::get('items', ['uses' => 'Controller@items', 'as' => 'items']);

});

/** @noinspection PhpUndefinedMethodInspection */
Route::group(['prefix' => 'service/es'], function () {

    /** @noinspection PhpUndefinedMethodInspection */
    Route::get('characters', ['uses' => 'WebServiceControllerES@characters', 'as' => 'charactersService']);
    /** @noinspection PhpUndefinedMethodInspection */
    Route::get('secondaryCharacters',
        ['uses' => 'WebServiceControllerES@secondaryCharacters', 'as' => 'secondaryCharactersService']);
    /** @noinspection PhpUndefinedMethodInspection */
    Route::get('enemies', ['uses' => 'WebServiceControllerES@enemies', 'as' => 'enemiesService']);
    /** @noinspection PhpUndefinedMethodInspection */
    Route::get('materia', ['uses' => 'WebServiceControllerES@materia', 'as' => 'materiaService']);
    /** @noinspection PhpUndefinedMethodInspection */
    Route::get('weapons', ['uses' => 'WebServiceControllerES@weapons', 'as' => 'weaponsService']);
    /** @noinspection PhpUndefinedMethodInspection */
    Route::get('songs', ['uses' => 'WebServiceControllerES@songs', 'as' => 'songsService']);
    /** @noinspection PhpUndefinedMethodInspection */
    Route::get('items', ['uses' => 'WebServiceControllerES@items', 'as' => 'itemsService']);

});