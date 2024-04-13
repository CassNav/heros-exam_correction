<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Logo;

class LogoController extends Controller
{
    public function index()
    {
        $logos = Logo::summon_logos();
        return view('logos.index', compact('logos'));
    }

    public function create()
    {

    }

}
