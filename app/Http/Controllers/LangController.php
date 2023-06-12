<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LangController extends Controller
{
    public function lang_en()
    {
        session()->forget('key');
        return redirect()->back();
    }

    public function lang_jp()
    {
        session(['key' => 'jp']);
        return redirect()->back();
    }

    public function lang_kr()
    {
        session(['key' => 'kr']);
        return redirect()->back();
    }

    public function lang_th()
    {
        session(['key' => 'th']);
        return redirect()->back();
    }
}
