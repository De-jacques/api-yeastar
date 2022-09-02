<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function index()
    {
        // return view('layouts.main');
    }

    public function addExtension(Request $request){
        dd($request->number);
        $request->validate([
            'number' => 'required'
        ]);
    }
}



