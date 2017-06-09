<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\DB;

class WebServiceControllerES extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    /**
     * @return mixed
     */
    public function characters()
    {
        /** @noinspection PhpUndefinedMethodInspection */
        $characters = DB::connection('mysql_es')->select('SELECT * FROM personajes');
        return $characters;
    }

    /**
     * @return mixed
     */
    public function secondaryCharacters()
    {
        /** @noinspection PhpUndefinedMethodInspection */
        $characters = DB::connection('mysql_es')->select('SELECT * FROM personajessecundarios');
        return $characters;
    }

    /**
     * @return mixed
     */
    public function enemies()
    {
        /** @noinspection PhpUndefinedMethodInspection */
        $enemies = DB::connection('mysql_es')->select('SELECT * FROM enemigos');
        return $enemies;
    }

    /**
     * @return mixed
     */
    public function materia()
    {
        /** @noinspection PhpUndefinedMethodInspection */
        $materia = DB::connection('mysql_es')->select('SELECT * FROM materia');
        return $materia;
    }

    /**
     * @return mixed
     */
    public function weapons()
    {
        /** @noinspection PhpUndefinedMethodInspection */
        $weapons = DB::connection('mysql_es')->select('SELECT * FROM armas');
        return $weapons;
    }

    /**
     * @return mixed
     */
    public function songs()
    {
        /** @noinspection PhpUndefinedMethodInspection */
        $songs = DB::connection('mysql_es')->select('SELECT * FROM canciones');
        return $songs;
    }

    /**
     * @return mixed
     */
    public function items()
    {
        /** @noinspection PhpUndefinedMethodInspection */
        $items = DB::connection('mysql_es')->select('SELECT * FROM objetos');
        return $items;
    }

}
