<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Observers\FlightObserver;


class Flight extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }
}
