<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function form(Request $request)
    {
        $first = $request->input('first_name');
        $last = $request->input('last_name');
        return view('welcome')->with('first', $first)->with('last', $last);
    }
}
