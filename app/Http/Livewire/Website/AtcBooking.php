<?php

namespace App\Http\Livewire\Website;

use App\Models\BookingAtc;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AtcBooking extends Component
{
    public $facilitys,
        $facilitysIvao,
        $facilitybooks;

    public $modal = false;

    public $booking_id,
        $dependence,
        $start_at,
        $end_at;

    public function render()
    {

        $this->facilitysIvao = [
            ['rating' => 0, 'name' => "null"],
            ['rating' => 1, 'name' => "null"],
            ['rating' => 2, 'name' => "AS1"],
            ['rating' => 3, 'name' => "AS2"],
            ['rating' => 4, 'name' => "AS3"],
            ['rating' => 5, 'name' => "ADC"],
            ['rating' => 6, 'name' => "APC"],
            ['rating' => 7, 'name' => "ACC"],
            ['rating' => 8, 'name' => "SEC"],
            ['rating' => 9, 'name' => "SAI"],
            ['rating' => 10, 'name' => "CAI"],
        ];


        $this->facilitys = [
            ['rating' => 4, 'name' => 'SKBO_DEL'],
            ['rating' => 5, 'name' => 'SKBO_S_GND'],
            ['rating' => 5, 'name' => 'SKBO_N_GND'],
            ['rating' => 5, 'name' => 'SKBO_TWR'],
            ['rating' => 6, 'name' => 'SKBO_APP'],
            ['rating' => 7, 'name' => 'SKED_CTR'],
        ];

        foreach ($this->facilitys as $key => $value) {
            $item = (object) $value;
            $item->book = $this->getPositionBooking($item->name);
            $this->facilitybooks[$key] = $item;
        }


        return view('website.rfe23.booking.atc', [
            'bookings' => $this->facilitybooks,
        ])->extends('website.rfe23.template');
    }

    public function closeModal()
    {
        $this->modal = false;
    }

    public function openModal()
    {
        $this->modal = true;
    }

    public function showConfirm($id)
    {
        $atc = BookingAtc::findOrFail($id);

        $this->booking_id = $id;
        $this->dependence = $atc->dependence;
        $this->start_at = $atc->start_at;
        $this->end_at = $atc->end_at;

        $this->openModal();
    }

    public function booking($id)
    {
        $atc = BookingAtc::findOrFail($id);

        if (!auth()->user()) {
            return redirect()->route('Login');
        }

        if ($atc->user_id == null) {
            $atc->user_id = Auth::user()->id;
            $atc->save();
        } else {
            return route('home');
        }

        $this->closeModal();
        return redirect()->back()->with("message", "Se ha reservado correctamente!");
    }

    public function getPositionBooking($dependence)
    {
        return BookingAtc::where('dependence', $dependence)
            ->orderBy('order')
            ->get();
    }
}
