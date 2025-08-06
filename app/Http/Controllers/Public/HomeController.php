<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projeto;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $latestProjects = Projeto::where('status', 'concluido')->latest()->take(3)->get();
        $latestPosts = Post::where('status', 'concluido')->latest()->take(3)->get();
        return view('public.pages.home', compact(['latestProjects', 'latestPosts']));
    }
}
