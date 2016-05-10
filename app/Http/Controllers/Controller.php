<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    /**
     * @return mixed
     */
    public function characters()
    {
        $service = new WebServiceController();
        $characters = $service->characters();
        /** @noinspection PhpUndefinedMethodInspection */
        return view('pages.characters')->with(compact('characters'));
    }

    /**
     * @return mixed
     */
    public function secondaryCharacters()
    {
        $service = new WebServiceController();
        $secondaryCharacters = $service->secondaryCharacters();
        /** @noinspection PhpUndefinedMethodInspection */
        return view('pages.secondaryCharacters')->with(compact('secondaryCharacters'));
    }

    /**
     * @return mixed
     */
    public function enemies()
    {
        $service = new WebServiceController();
        $enemies = $service->enemies();
        /** @noinspection PhpUndefinedMethodInspection */
        return view('pages.enemies')->with(compact('enemies'));
    }

    /**
     * @return mixed
     */
    public function materia()
    {
        $service = new WebServiceController();
        $materia = $service->materia();
        /** @noinspection PhpUndefinedMethodInspection */
        return view('pages.materia')->with(compact('materia'));
    }

    /**
     * @return mixed
     */
    public function weapons()
    {
        $service = new WebServiceController();
        $weapons = $service->weapons();
        /** @noinspection PhpUndefinedMethodInspection */
        return view('pages.weapons')->with(compact('weapons'));
    }

    /**
     * @return mixed
     */
    public function songs()
    {
        $service = new WebServiceController();
        $songs = $service->songs();
        /** @noinspection PhpUndefinedMethodInspection */
        return view('pages.songs')->with(compact('songs'));
    }

    /**
     * @return mixed
     */
    public function items()
    {
        $service = new WebServiceController();
        $items = $service->items();
        /** @noinspection PhpUndefinedMethodInspection */
        return view('pages.items')->with(compact('items'));
    }

}
