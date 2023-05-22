<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function main(){
        return view('example');
        // return view('main.pruebas');
    }
}
