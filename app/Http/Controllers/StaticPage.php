<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPage extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('pages.index')->with('class', 'home');
    }
    public function why(Request $request)
    {
        return view('pages.why')->with('class', 'why');
    }
    public function guidelines(Request $request)
    {
        return view('pages.guidelines')->with('class', 'guidelines');
    }
}
