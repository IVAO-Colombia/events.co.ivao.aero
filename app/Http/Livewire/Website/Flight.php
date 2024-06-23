<?php

namespace App\Http\Livewire\Website;

use App\Models\Flights;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Flight extends Component
{

    public $flight_id,
        $flight,
        $airline,
        $departure,
        $departure_gate,
        $destination,
        $destination_gate,
        $aircraft,
        $departure_time,
        $arrival_time,
        $information;

    public $search = "",
        $sort_id = "id",
        $sort = "desc",
        $type = "",
        $modal = false;

    public function render()
    {
        $flights = new Flights;

        return view('website.rfe23.booking.flights', [
            'departureFlights' => $flights->getDepartureFlights("SKBO"),
            'arrivalFlights' => $flights->getArrivalFlights("SKBO"),
            'flights' => Flights::all(),
        ])->extends('website.rfe23.template');
    }


    public function resetSearch()
    {
        $this->search = "";
        $this->sort_id = "id";
        $this->sort = "desc";
        $this->type = "";
        $this->modal = false;
    }

    public function closeModal()
    {
        $this->modal = false;
    }

    public function openModal()
    {
        $this->modal = true;
    }

    public function ArrivalFlights()
    {
        $this->type = "arr";
    }

    public function DepartureFlights()
    {
        $this->type = "dpt";
    }

    public function showConfirm($id)
    {
        $flight = Flights::findOrFail($id);

        $this->flight_id = $id;
        $this->flight = $flight->flight;
        $this->airline = $flight->airline;
        $this->aircraft = $flight->aircraft;
        $this->departure = $flight->departure;
        $this->departure_gate = $flight->departure_gate;
        $this->destination = $flight->destination;
        $this->destination_gate = $flight->destination_gate;
        $this->departure_time = $flight->departure_time;
        $this->arrival_time = $flight->arrival_time;
        $this->information = $flight->information;

        $this->openModal();
    }

    public function reserve($id)
    {
        $flight = Flights::findOrFail($id);

        if (!auth()->user()) {
            return redirect()->route('ivao.login-sso');
        }

        if ($flight->user_id == null) {
            $flight->user_id = Auth::user()->vid;
            $flight->save();
        } else {
            return route('home');
        }

        $this->closeModal();
        return redirect()->back()->with("message", "Se ha reservado correctamente!");
    }
}
