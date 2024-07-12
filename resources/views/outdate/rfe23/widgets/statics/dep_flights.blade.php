@php
$dep_flights= DB::select('SELECT COUNT(`flight`) FROM `flights` WHERE `type` = "departure"');
foreach ($dep_flights as $flights) {
$total_flights = $flights->{'COUNT(`flight`)'};
}

$bookings=DB::select('SELECT COUNT(`user_id`) FROM `flights` WHERE `type` = "departure"');

foreach ($bookings as $book_flights) {
}
if ($total_flights > 0) {
$book_af = $book_flights->{'COUNT(`user_id`)'};
$book = (($book_flights->{'COUNT(`user_id`)'}*100)/$total_flights);
$total_flights_af = $total_flights;
$total_flights_afe = $total_flights-$book_af;
$total_flights = ((($total_flights-$book_af)*100)/$total_flights);


$finalPercentage = number_format($book, 0, '','');
} else {
$book_af = 0;
$book = 0;
$total_flights_af = 0;
$total_flights = 0;
$total_flights_afe = 0;
}
@endphp

<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-10">
            <h2 class="text-4xl text-center">{{ __("Statitics departures") }}</h2>
            <div class="flex justify-between mb-1">
                <span class="text-base font-medium text-blue-700">{{__('Bookings')}}</span>
                <span class="text-sm font-medium text-blue-700">{{ $book_af
                    }}/{{$total_flights_afe}}</span>
            </div>
            <div class="w-full bg-gray-200 rounded-full">
                <div class="bg-gradient-to-r from-amber-500 via-yellow-400 to-amber-300 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full"
                    style="width: {{$book}}%"> {{ $finalPercentage }}%</div>
            </div>
        </div>
    </div>
</div>