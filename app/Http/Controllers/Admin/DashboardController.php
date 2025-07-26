<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        // Render the admin dashboard view
        return view('admin.pages.dashboard');
        
    }
}
