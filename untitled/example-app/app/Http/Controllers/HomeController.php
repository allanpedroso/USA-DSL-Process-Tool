<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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
    public function newProject()
    {
        return view('newProject');
    }

    public function store(Request $request)
    {
        $request->validate([
            'start_date' => ['date_format:m/d/Y', 'after:tomorrow'],
            'end_date' => ['date_format:m/d/Y', 'before:start_date']
        ]);

    }
}
