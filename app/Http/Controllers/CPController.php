<?php

namespace App\Http\Controllers;

class CPController extends Controller
{
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
