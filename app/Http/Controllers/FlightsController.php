<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FlightsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $flight = Flight::orderByDesc('id')->paginate(10);
        return view('flights.index',compact('flight'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('flights.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         //guarde el producto con la informacion del formulario
         $flight = new Flight();
         $flight->user_id = Auth::id();
         $flight->origin = $request->origin;
         $flight->destination = $request->destination;
         $flight->going_date = $request->going;
         $flight->return_date = $request->returnDate;
         $flight->adults = $request->adults;
         $flight->minors = $request->minors;
         $flight->saveOrFail();

         //despues de guardar el prodcuto lo redireccione a la ruta home donde se muestra el prodcto que acabo de guardar
         return redirect()->route("vuelos.index")->with('status', 'A reservado su vuelo correctamente!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
