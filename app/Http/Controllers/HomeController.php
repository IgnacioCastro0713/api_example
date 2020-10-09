<?php

namespace App\Http\Controllers;

use App\Pokemon;

class HomeController extends Controller
{
    public function index()
    {
        $pokemon = Pokemon::all();
        return response()->viewWithOldInputs("Home.index", $pokemon);
    }
}
