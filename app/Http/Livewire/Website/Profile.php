<?php

namespace App\Http\Livewire\Website;

use App\Models\BookingAtc;
use App\Models\Flights;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('website.rfe24.template')]

class Profile extends Component
{
    public $flights, $atc;
    public function render()
    {
        $this->flights = Flights::getBookingByVID(Auth::user()->vid);
        $this->atc = BookingAtc::getBookingByVID(Auth::user()->id);

        return view('website.rfe24.profile.view', [
            "flights" => $this->flights,
            "bookingsAtc" => $this->atc,
        ]);
    }

    public function unbookAtc($id)
    {
        $position = BookingAtc::find($id);
        if ($position->user_id == Auth::user()->id) {
            $position->user_id = null;
            $position->save();
            $this->dispatch("OpenSweetalert", "Unbooked successfully!");
        }
    }

    public function unbookFlights($id)
    {
        $flight = Flights::find($id);
        if ($flight->user_id == Auth::user()->vid) {
            $flight->user_id = null;
            $flight->save();
            $this->dispatch("OpenSweetalert", "Unbooked successfully!");
        }
    }
}
