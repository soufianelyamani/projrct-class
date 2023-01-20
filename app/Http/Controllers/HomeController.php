<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // dd(auth::id());=>should display the id of the user who enters.
        // dd(Auth::user());=>should display the data of the user who enters.
        // dd(Auth::user()->name);should display the name of the user who enters.
        return view('home');
    }
}
