<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class BaseController extends Controller
{

    //* Obtiene datos
    public function getData($ruta){
        $client = new Client();
        return $response = $client->request('GET', 'https://752a-2806-2f0-9f00-ffaf-204c-5c35-4115-5b18.ngrok-free.app/api/' . $ruta);
    }

    public function main(){
        
        $hoteles = json_decode($this->getData('hotels')->getBody(), true);
        $vuelos = json_decode($this->getData('flights')->getBody(), true);
        $destinos = json_decode($this->getData('destinations')->getBody(), true);

        return view('welcome', compact('hoteles', 'vuelos', 'destinos'));
    }
}
