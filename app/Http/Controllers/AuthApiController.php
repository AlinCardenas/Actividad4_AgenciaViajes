<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class AuthApiController extends Controller
{
    public function showLoginForm()
    {
        return view('main.example');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $client = new Client();
        $response = $client->post('https://752a-2806-2f0-9f00-ffaf-204c-5c35-4115-5b18.ngrok-free.app/api/auth/login', [
            'form_params' => [
                'email' => $credentials['email'],
                'password' => $credentials['password'],
            ],
        ]);

        $statusCode = $response->getStatusCode();

        if ($statusCode === 201) {
            $token = $response->getBody()->getContents();
            session(['token' => $token]);
            // return 'Iniciaste sesion 🎉';
            $token = session('token');

            $client = new Client();
            $response = $client->get('https://752a-2806-2f0-9f00-ffaf-204c-5c35-4115-5b18.ngrok-free.app/api/getuser', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                    'Accept' => 'application/json',
                ],
            ]);

            $user = json_decode($response->getBody()->getContents());

            $name = $user->name;
            $email = $user->email;


            return view('main.recepcion', compact('name', 'email'));
        } else {
            return redirect()->back()->withErrors(['message' => 'Credenciales inválidas']);
        }
    }

    public function getUserDetails()
    {
    
    }
}
