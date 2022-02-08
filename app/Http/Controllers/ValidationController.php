<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidationController extends Controller
{

    public function afterEqualDate()
    {
        return view('newProject');
    }

    public function afterEqualDateStore(Request $request)
    {
        $request->validate([
            'start_date' => 'required',
            'end_date' => 'required|date|after_or_equal:start_date'
        ]);
    }



}
