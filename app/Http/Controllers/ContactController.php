<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class ContactController extends Controller
{
    
    public function index(): Response
    {
        return Inertia::render('Contact');
    }

    public function store(Request $request)
    {
         $validated = $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email',
        ]);
        dd($request->all());
    }

}
