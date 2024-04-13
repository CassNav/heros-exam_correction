<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Superhero;

class SuperheroController extends Controller
{
    public function index()
    {
        return view('superheros.index')
            ->with('heroes', Superhero::summon_heros());
    }
}
