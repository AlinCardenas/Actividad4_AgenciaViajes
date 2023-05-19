<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getData(){
        $client = new Client();
        $response = $client->request('GET', 'https://api.nasa.gov/planetary/apod?api_key=UYS6M0xzkXMAruQXVCSF2JOKXbclwK4KRwiOsSUr');

        $data = json_decode($response->getBody(), true);
        // dump($data);
        return view('pruebas.vista2', ['data' => $data]);
    }
}
