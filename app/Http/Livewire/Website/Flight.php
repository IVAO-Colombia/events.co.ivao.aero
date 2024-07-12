<?php

namespace App\Http\Livewire\Website;

use App\Models\Flights;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('website.rfo24.template')]
class Flight extends Component
{

    public $flightModel;
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

        return view('website.rfo24.booking.flights', [
            'departureFlights' => $flights->getDepartureFlights("SKRG"),
            'arrivalFlights' => $flights->getArrivalFlights("SKRG"),
            'flights' => Flights::all(),
        ]);
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
        $this->flightModel = Flights::findOrFail($id);

        $this->flight_id = $id;
        $this->flight = $this->flightModel->flight;
        $this->airline = $this->flightModel->airline;
        $this->aircraft = $this->flightModel->aircraft;
        $this->departure = $this->flightModel->departure;
        $this->departure_gate = $this->flightModel->departure_gate;
        $this->destination = $this->flightModel->destination;
        $this->destination_gate = $this->flightModel->destination_gate;
        $this->departure_time = $this->flightModel->departure_time;
        $this->arrival_time = $this->flightModel->arrival_time;
        $this->information = $this->flightModel->information;

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
