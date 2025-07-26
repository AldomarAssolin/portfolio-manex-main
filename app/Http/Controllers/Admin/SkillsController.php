<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    /**
     * Display the skills page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('admin.pages.skills');
    }
}
