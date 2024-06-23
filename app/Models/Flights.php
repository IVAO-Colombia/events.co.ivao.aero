<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flights extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'flight', 'type', 'airline', 'departure', 'departure_gate', 'route', 'destination', 'destination_gate', 'aircraft', 'departure_time', 'arrival_time', 'information', 'user_id'
    ];

    public function getOACIAirline()
    {
        if (($icao = mb_substr($this->flight, 0, 1)) == 'N' && ($icao = mb_substr($this->flight, 0, 3)) !== 'NSE' && ($icao = mb_substr($this->flight, 0, 3)) !== 'NKS') {
            return $icao;
        } elseif (($icao = mb_substr($this->flight, 0, 2)) == 'HK') {
            return $icao;
        } else {
            return mb_substr($this->flight, 0, 3);
        }
    }

    public function getArrivalFlights(String $airport)
    {
        return Flights::where('destination', $airport)
            ->get();
    }

    public function getDepartureFlights(String $airport)
    {
        return Flights::where('departure', $airport)
            ->get();
    }

    public function getBookingByVID($vid)
    {
        return Flights::where('user_id', $vid)
            ->get();
    }
}
