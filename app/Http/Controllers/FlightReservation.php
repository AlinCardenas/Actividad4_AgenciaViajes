<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Conekta\Order;
use Carbon\Carbon;

class FlightReservation extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('flightReservations.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('flightReservations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //funcions para crear
        //flightReservations::create($request->all());
        //redireccionamiento
        //return redirect('payment')->with('message','Se ha creado correctamente el genero');
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

    public function payment()
    {
        $order='';
        return view('flightReservations.index');
    }

    public function paymentstore(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $street1 = $request->input('street');
        $postal_code = $request->input('postal_code');
        $country = $request->input('country');
        $name_product = $request->input('name_product');
        $unit_price = $request->input('unit_price');
        $unit_price2 = $unit_price* 100;
        $quantity = $request->input('quantity');


        require_once("conekta/conekta-php-master/lib/Conekta.php");
        \Conekta\Conekta::setApiKey("key_krDgSBUFDXLq75oNcei56ZT");
        \Conekta\Conekta::setApiVersion("2.0.0");

        $thirty_days_from_now = Carbon::now()->addDays(30)->timestamp;

        $order = \Conekta\Order::create(
            [
              "line_items" => [
                [
                  "name" => $name_product,
                  "unit_price" => $unit_price2,
                  "quantity" => $quantity
                ]
              ],
              "shipping_lines" => [
                [
                  "amount" => 0,
                  "carrier" => "FEDEX"
                ]
              ], 
              "currency" => "MXN",
              "customer_info" => [
                "name" => $name,
                "email" => $email,
                "phone" => $phone
              ],
              "shipping_contact" => [
                "address" => [
                  "street1" => $street1,
                  "postal_code" => $postal_code,
                  "country" => "MX"
                ]
              ], 
              "charges" => [
                [
                  "payment_method" => [
                    "type" => "oxxo_cash",
                    "expires_at" => $thirty_days_from_now
                  ]
                ]
              ]
            ]
          );
        return view('flightReservations.payment', compact('order'));
    }

}
