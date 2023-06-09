<?php

namespace App\Http\Controllers;

use Faker\Core\Number;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Exception\GuzzleException;

class ApiController extends Controller
{
    public function store(Request $request)
    {
        
        $data = $request->all();
        $data0 = null;
        $data0['user_id'] = Session::get('user')->id;
        $data0['flight_id'] = intval($data['flight_id']);
        $data0['numAsiento'] = intval($data['numAsiento']);
        $data0['leave_date'] = substr($data['fecha'], 0, 10);
        $data0['arrive_date'] = substr($data['fecha'], 14, 24);
        $data0 = ($data0);
        $client = new Client();
        $response = $client->post('https://7218-2806-2f0-9f00-ffaf-d1dc-7ffc-a7d7-3072.ngrok-free.app/api/usersflights', [
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ],
             'json' => $data0,
        ]);
    
        $statusCode = $response->getStatusCode();
    
        if ($statusCode === 200) {
            Session::flash('alert_message', '¡Vuelo agendado! 🌴🚢🏕️✈️');
            Session::flash('alert_type', 'success');

            return redirect()->route('main');
            // return 'Registro creado exitosamente.';
        } else {
            return 'No se pudo crear el registro en la API externa.';
        }
    }

    public function profile(){
        
        $client = new Client();

        $response = $client->get('https://7218-2806-2f0-9f00-ffaf-d1dc-7ffc-a7d7-3072.ngrok-free.app/api/misvuelos/' . Session::get('user')->id);
    
        $statusCode = $response->getStatusCode();
        if ($statusCode === 200) {
            $misvuelos = json_decode($response->getBody(), true);
        }else{
            return "ERROR DESCONOCIDO";
        }
        return view('profile.edit', compact("misvuelos"));
    }
}
