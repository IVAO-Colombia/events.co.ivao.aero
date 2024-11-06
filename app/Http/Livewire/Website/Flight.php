<?php

namespace App\Http\Livewire\Website;

use App\Models\Flights;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\Features\SupportPagination\WithoutUrlPagination;
use Livewire\WithPagination;

#[Layout('website.rfe24.template')]
class Flight extends Component
{
    use WithPagination, WithoutUrlPagination;

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

    public $sort_by = "id",
        $sort = "ASC",
        $type = "";

    public $modal = false;

    public function boot()
    {
        $this->dispatch('update-aos');
    }

    public function render()
    {
        $flightQuery = Flights::query()->orderBy($this->sort_by, $this->sort);

        if ($this->type) {
            $flightQuery->where('type', $this->type);
        }

        $flights = $flightQuery->paginate(25);

        return view('website.rfe24.booking.flights', [
            'flights' => $flights,
        ]);
    }

    public function resetSearch()
    {
        $this->sort_by = "id";
        $this->sort = "ASC";
        $this->type = "";
        $this->modal = false;
    }

    public function toggleModal()
    {
        $this->modal = !$this->modal;
    }

    public function ArrivalFlights()
    {
        $this->type = "arrival";
    }

    public function DepartureFlights()
    {
        $this->type = "departure";
    }

    public function departureTime()
    {

        if ($this->sort_by == "departure_time" && $this->sort == "ASC") {
            $this->sort = "DESC";
        } else {
            $this->sort_by = "departure_time";
            $this->sort = "ASC";
        }
    }

    public function ArrivalTime()
    {

        if ($this->sort_by == "arrival_time" && $this->sort == "ASC") {
            $this->sort = "DESC";
        } else {
            $this->sort_by = "arrival_time";
            $this->sort = "ASC";
        }
    }

    public function sortAsc()
    {
        $this->sort = "ASC";
    }

    public function sortDecs()
    {
        $this->sort = "DESC";
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

        $this->toggleModal();
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

        $this->toggleModal();
        return redirect()->back()->with("message", "Se ha reservado correctamente!");
    }
}
