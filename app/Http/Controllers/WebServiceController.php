<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\DB;

class WebServiceController extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    /**
     * @return mixed
     */
    public function characters()
    {
        /** @noinspection PhpUndefinedMethodInspection */
        $characters = DB::select('SELECT * FROM personajes');
        return $characters;
    }

    /**
     * @return mixed
     */
    public function secondaryCharacters()
    {
        /** @noinspection PhpUndefinedMethodInspection */
        $characters = DB::select('SELECT * FROM personajessecundarios');
        return $characters;
    }

    /**
     * @return mixed
     */
    public function enemies()
    {
        /** @noinspection PhpUndefinedMethodInspection */
        $enemies = DB::select('SELECT * FROM enemigos');
        return $enemies;
    }

    /**
     * @return mixed
     */
    public function materia()
    {
        /** @noinspection PhpUndefinedMethodInspection */
        $materia = DB::select('SELECT * FROM materia');
        return $materia;
    }

    /**
     * @return mixed
     */
    public function weapons()
    {
        /** @noinspection PhpUndefinedMethodInspection */
        $weapons = DB::select('SELECT * FROM armas');
        return $weapons;
    }

    /**
     * @return mixed
     */
    public function songs()
    {
        /** @noinspection PhpUndefinedMethodInspection */
        $songs = DB::select('SELECT * FROM canciones');
        return $songs;
    }

    /**
     * @return mixed
     */
    public function items()
    {
        /** @noinspection PhpUndefinedMethodInspection */
        $items = DB::select('SELECT * FROM objetos');
        return $items;
    }

}
