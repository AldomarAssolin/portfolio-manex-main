<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
        // Logic to retrieve contacts
        $contacts = []; // Replace with actual retrieval logic

        return view('admin.pages.contacts', compact('contacts'));
    }
}
