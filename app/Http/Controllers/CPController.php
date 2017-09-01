<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CPController extends Controller
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
     * Show the application control panel.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cp.index');
    }
}
