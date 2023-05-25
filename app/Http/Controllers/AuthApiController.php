<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthApiController extends Controller
{
    public function showLoginForm()
    {
        return view('authapi.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $client = new Client();
        $response = $client->post('https://7218-2806-2f0-9f00-ffaf-d1dc-7ffc-a7d7-3072.ngrok-free.app/api/iniciar', [
            'form_params' => [
                'email' => $credentials['email'],
                'password' => $credentials['password'],
            ],
        ]);

        $statusCode = $response->getStatusCode();

        if ($statusCode === 200) {
            $token = $response->getBody()->getContents();
            $val = json_decode($token);
            // dump($val->data);

            Session::put([
                'token' => $val->token,
                'user' => $val->data
            ]);
            return redirect()->route('main');
        } else {
            return "Credenciales inválidas";
        }
    }
    
    public function cerrar()
    {
        Session::forget('token');
        Session::forget('user');
        return redirect()->route('auth.form');
    }
}
