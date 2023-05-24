<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class BaseController extends Controller
{

    //* Obtiene datos
    public function getData($ruta){
        $client = new Client();
        return $rspeonse = $client->request('GET', 'https://752a-2806-2f0-9f00-ffaf-204c-5c35-4115-5b18.ngrok-free.app/api/' . $ruta, [
            'query' => ['limit' => 8]
        ]);
    }

    public function main(){
        $destinos = json_decode($this->getData('destinations')->getBody(), true);
        $hoteles = json_decode($this->getData('hotels')->getBody(), true);
        $vuelos = json_decode($this->getData('flights')->getBody(), true);
        
        $destinos = array_reverse($destinos);
        $destinos = array_splice($destinos, 0, 9);
        $hoteles = array_splice($hoteles, 0, 9);
        $vuelos = array_splice($vuelos, 0, 9);


        return view('welcome', compact('hoteles', 'vuelos', 'destinos'));
    }
}
