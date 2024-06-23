@php
$arr_flights= DB::select('SELECT COUNT(`flight`) FROM `flights` WHERE `type` = "arrival"');
foreach ($arr_flights as $flights_arr) {
}
$total_flights_arr = $flights_arr->{'COUNT(`flight`)'};
$bookings=DB::select('SELECT COUNT(`user_id`) FROM `flights` WHERE `type` = "arrival"');
foreach ($bookings as $book_flights_arr) {
}
if (!$total_flights_arr==0) {
$book_af_arr = $book_flights_arr->{'COUNT(`user_id`)'};
$book_arr = (($book_flights_arr->{'COUNT(`user_id`)'}*100)/$total_flights_arr);
$total_flights_af_arr = $total_flights_arr;
$total_flights_afe_arr = $total_flights_arr-$book_af_arr;
$total_flights_arr = ((($total_flights_arr-$book_af_arr)*100)/$total_flights_arr);
} else {
$book_af_arr = 0;
$book_arr = 0;
$total_flights_af_arr = 0;
$total_flights_afe_arr = 0;
$total_flights_arr = 0;
}
@endphp
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-10">
            <h1 class="descripRFE">{{ __("custom.StatiticsArrivals") }}</h1>
            <div class="progress" style="height: 2rem">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar"
                    aria-valuenow="{{ $book_arr }}" aria-valuemin="0" aria-valuemax="100"
                    style="width: {{ $book_arr }}%">
                    {{ $book_af_arr }}
                </div>
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar"
                    aria-valuenow="{{ $total_flights_arr }}" aria-valuemin="0" aria-valuemax="100"
                    style="width: {{ $total_flights_arr }}%">
                    {{ $total_flights_afe_arr }}&nbsp;{{
                    __("booking.Available")
                    }}
                </div>
            </div>
        </div>
    </div>
</div>
