<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about.index');
    }

    public function ceo_message()
    {
        return view('about.ceo_message');
    }

    public function statement()
    {
        return view('about.statement');
    }

    public function why()
    {
        return view('about.why');
    }

    public function team()
    {
        return view('about.team');
    }
}
