<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.frontend.index');
    }

    public function features()
    {
        return view('pages.frontend.features');
    }

    public function extras()
    {
        return view('pages.frontend.extras');
    }

    public function pricing()
    {
        return view('pages.frontend.pricing');
    }
}
