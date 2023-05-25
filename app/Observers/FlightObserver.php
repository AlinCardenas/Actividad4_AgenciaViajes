<?php

namespace App\Observers;

use App\Models\Flight;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class FlightObserver
{
    /**
     * Handle the Flight "created" event.
     */
    public function creating(Flight $flight): void
    {
        $flight->reservation_number = Str::ulid();
    }

    /**
     * Handle the Flight "created" event.
     */
    public function created(Flight $flight): void
    {
        // Aquí puedes personalizar el contenido del correo electrónico con los datos del vuelo
        $data = [
            'reservation_number' => $flight->reservation_number,
            'origin' => $flight->origin,
            'destination' => $flight->destination,
            'going_date' => $flight->going_date,
            'return_date' => $flight->return_date,
            'passengers' => $flight->adults + $flight->minors,
        ];

        Mail::send('emails.flight_created', $data, function ($message) use ($flight) {
            $message->to($flight->user->email)->subject('Nuevo vuelo creado');
        });
    }

    /**
     * Handle the Flight "updated" event.
     */
    public function updated(Flight $flight): void
    {
        //
    }

    /**
     * Handle the Flight "deleted" event.
     */
    public function deleted(Flight $flight): void
    {
        //
    }

    /**
     * Handle the Flight "restored" event.
     */
    public function restored(Flight $flight): void
    {
        //
    }

    /**
     * Handle the Flight "force deleted" event.
     */
    public function forceDeleted(Flight $flight): void
    {
        //
    }
}
