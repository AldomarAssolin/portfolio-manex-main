<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class HomeController extends Controller
{
    public function index()
    {
        $latestProjects = Project::where('status', 'published')->latest()->take(3)->get();
        return view('public.pages.home', compact('latestProjects'));
    }
}
