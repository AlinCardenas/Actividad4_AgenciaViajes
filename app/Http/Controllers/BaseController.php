<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class BaseController extends Controller
{

    //* Obtiene datos
    public function getData($ruta)
    {
        $client = new Client();
        return $response = $client->request('GET', 'https://fe0c-2806-2f0-9f00-ffaf-10bc-952d-cdd6-f86f.ngrok-free.app/api/' . $ruta);
    }

    public function reformar($objeto, $cant = 9)
    {
        $fase1 = json_decode($objeto, true);
        $fase1 = array_reverse($fase1);
        $val = array_slice($fase1, 0, $cant);
        return $val;
    }

    public function getImages($destinos)
    {
        $contenedor = [];
        foreach ($destinos as $item) {
            $val = json_decode($item['images']);
            array_push($contenedor ,$val[0]);
        }
        return $contenedor;
    }

    public function main()
    {
        $destinos = $this->reformar($this->getData('destinations')->getBody());
        $hoteles = $this->reformar($this->getData('hotels')->getBody());
        $vuelos = $this->reformar($this->getData('flights')->getBody());
        $aerolineas = $this->reformar($this->getData('airlines')->getBody(), 4);

        $contenedor = $this->getImages($destinos);

        return view('welcome', compact('hoteles', 'vuelos', 'destinos', 'aerolineas', 'contenedor'));
    }
}
