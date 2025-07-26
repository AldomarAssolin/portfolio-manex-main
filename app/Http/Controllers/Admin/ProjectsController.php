<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display the projects page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('admin.pages.projects');
    }
}
