<?php

namespace App\Http\Controllers;

use App\Models\Subscriptions;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class SubscriptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|unique:subscriptions|email',
        ]);
        if ($validator->fails()) {
            return redirect('/#añadir')
                        ->withErrors($validator);
        }
        $suscripcion = new Subscriptions();
        $suscripcion->email = $request->email;
        $suscripcion->save();
        return redirect('/#añadir')->with('mensaje','Se ha suscrito correctamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(Subscriptions $subscriptions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subscriptions $subscriptions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subscriptions $subscriptions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subscriptions $subscriptions)
    {
        //
    }
}
