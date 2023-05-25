<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    //* Obtiene datos
    private function getData($ruta){
        $client = new Client();
        return $response = $client->request('GET', 'https://7218-2806-2f0-9f00-ffaf-d1dc-7ffc-a7d7-3072.ngrok-free.app/api/' . $ruta);
    }

    //* Get para vuelos
    public function getFlights(){        
        $data = json_decode($this->getData('flights')->getBody(), true);

        return view('flights.prueba', compact('data'));
    }
    //* Get para vuelos
    public function getHotels(){
        $data = json_decode($this->getData('hotels')->getBody(), true);
        
        return view('flights.prueba', compact('data'));
    }
    //* Get para vuelos
    public function getDestinations(){
        $data = json_decode($this->getData('destinations')->getBody(), true);
        
        return view('flights.prueba', compact('data'));
    }
}
