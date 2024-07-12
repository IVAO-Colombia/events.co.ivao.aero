@php
$dep_flights= DB::select('SELECT COUNT(`flight`) FROM `flights` WHERE `type` = "departure"');
foreach ($dep_flights as $flights) {
}
$total_flights = $flights->{'COUNT(`flight`)'};
$bookings=DB::select('SELECT COUNT(`user_id`) FROM `flights` WHERE `type` = "departure"');
foreach ($bookings as $book_flights) {
}
if (!$total_flights==0) {
$book_af = $book_flights->{'COUNT(`user_id`)'};
$book = (($book_flights->{'COUNT(`user_id`)'}*100)/$total_flights);
$total_flights_af = $total_flights;
$total_flights_afe = $total_flights-$book_af;
$total_flights = ((($total_flights-$book_af)*100)/$total_flights);
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
            <h1 class="descripRFE">{{ __("custom.StatiticsDepartures") }}</h1>
            <div class="progress" style="height: 2rem">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar"
                    aria-valuenow="{{ $book }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $book }}%">
                    {{ $book_af }}
                </div>
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar"
                    aria-valuenow="{{ $total_flights }}" aria-valuemin="0" aria-valuemax="100"
                    style="width: {{ $total_flights }}%">
                    {{ $total_flights_afe }}&nbsp;{{ __("booking.Available") }}
                </div>
            </div>
        </div>
    </div>
</div>
