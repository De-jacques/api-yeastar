<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function index()
    {
        // $apiURL = 'http://192.168.1.251:8088/api/v2.0.0/login';
        // $postInput = [
        //     'username' => 'admin',
        //     'password' => 'f36875828e663291991403a0f6506faa',
        //     'port' => '8333',
        //     'version' => '2.0.0'
        // ];
        // $headers = [
        //     'X-header' => 'value'
        // ];
        // $response = Http::withHeaders($headers)->post($apiURL, $postInput);
        // $statusCode = $response->status();
        // $responseBody = json_decode($response->getBody(), true);
        // dd($responseBody);

        return view('layouts.main');
    }
}



