<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    /**
     * @return mixed
     */
    public function changeLang()
    {
        /** @noinspection PhpUndefinedMethodInspection */
        $input = Input::all();
        /** @noinspection PhpUndefinedMethodInspection */
        Session::put('lang', $input['lang']);
        return redirect('/characters');
    }

    /**
     * Does the language changing wibily wobily magic.
     */
    private function doLocale()
    {
        /** @noinspection PhpUndefinedMethodInspection */
        $lang = Session::get('lang');
        if ($lang != null) {
            /** @noinspection PhpUndefinedMethodInspection */
            App::setLocale($lang);
        } else {
            /** @noinspection PhpUndefinedMethodInspection */
            App::setLocale('es');
        }
    }

    /**
     * @return mixed
     */
    public function characters()
    {
        $this->doLocale();
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
        $this->doLocale();
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
        $this->doLocale();
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
        $this->doLocale();
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
        $this->doLocale();
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
        $this->doLocale();
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
        $this->doLocale();
        $service = new WebServiceController();
        $items = $service->items();
        /** @noinspection PhpUndefinedMethodInspection */
        return view('pages.items')->with(compact('items'));
    }

}
