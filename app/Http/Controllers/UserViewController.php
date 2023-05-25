<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class UserViewController extends Controller
{

    //* Obtiene datos
    public function getData($ruta)
    {
        $client = new Client();
        return $response = $client->request('GET', 'https://7218-2806-2f0-9f00-ffaf-d1dc-7ffc-a7d7-3072.ngrok-free.app/api/' . $ruta);
    }

    public function paginar($data)
    {
        $perPage = 10;
        $page = request()->get('page', 1); 
    
        $collection = new Collection($data); 
    
        return $paginatedData = new LengthAwarePaginator(
            $collection->forPage($page, $perPage), 
            $collection->count(),
            $perPage, 
            $page,
            ['path' => request()->url()] 
        );
    }

    public function getDestinations()
    {
        $registros = json_decode($this->getData('flights')->getBody());
        $registers = $this->paginar($registros);
        return view('userviews.destinations', compact('registers'));
    }
    public function getFlights()
    {
        $registros = json_decode($this->getData('flights')->getBody());
        $registers = $this->paginar($registros);
        return view('userviews.flights', compact('registers'));
    }
    public function getHotels()
    {
        $registros = json_decode($this->getData('hotels')->getBody());
        $registers = $this->paginar($registros);
        return view('userviews.hotels', compact('registers'));
    }
}
