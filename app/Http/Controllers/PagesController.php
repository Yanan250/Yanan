<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function accueil()
    {
    	return view('pages.accueil');
    }

    public function contact()
    {
    	return view('contact.message');
    }
}
