<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mapper;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.dashboard.index');
    }

    public function apiaries()
    {
      return view('pages.dashboard.apiaries');
    }

    public function createApiary()
    {
      return view('pages.dashboard.create.apiary');
    }

    public function hives()
    {
      return view('pages.dashboard.hives');
    }

    public function queens()
    {
      return view('pages.dashboard.queens');
    }

    public function createQueen()
    {
      return view('pages.dashboard.create.queen');
    }
}
