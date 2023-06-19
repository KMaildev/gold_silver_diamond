<?php

namespace App\Http\Controllers;

use App\Models\Activities;
use App\Models\Job;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $jobs = Job::all();
        $activities = Activities::all();
        return view('welcome', compact('jobs', 'activities'));
    }
}
