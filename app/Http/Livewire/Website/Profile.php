<?php

namespace App\Http\Livewire\Website;

use App\Models\BookingAtc;
use App\Models\Flights;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('website.rfo24.template')]

class Profile extends Component
{
    public function render()
    {
        $flights = new Flights;
        $atc = new BookingAtc;
        return view('website.rfo24.profile.view', [
            "flights" => $flights->getBookingByVID(Auth::user()->vid),
            "bookingsAtc" => $atc->getBookingByVID(Auth::user()->id),
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
