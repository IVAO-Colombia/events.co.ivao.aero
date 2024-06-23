@php
$arr_flights= DB::select('SELECT COUNT(`flight`) FROM `flights` WHERE `type` = "arrival"');




foreach ($arr_flights as $flights_arr) {
$total_flights_arr = $flights_arr->{'COUNT(`flight`)'};
}


$bookings = DB::select('SELECT COUNT(`user_id`) FROM `flights` WHERE `type` = "arrival"');

foreach ($bookings as $book_flights_arr) {

if ($total_flights_arr > 0) {


$book_af_arr = $book_flights_arr->{'COUNT(`user_id`)'};
$book_arr = (($book_af_arr*100)/$total_flights_arr);

$total_flights_af_arr = $total_flights_arr;
$total_flights_afe_arr = $total_flights_arr-$book_af_arr;
$total_flights_arr = ((($total_flights_arr-$book_af_arr)*100)/$total_flights_arr);


$finalPercentage = number_format($book_arr, 0, '','');
} else {
$book_af_arr = 0;
$book_arr = 0;
$total_flights_af_arr = 0;
$total_flights_afe_arr = 0;
$total_flights_arr = 0;
}
}



@endphp
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-10">
            <h2 class="text-4xl text-center">{{ __("Statitics arrivals") }}</h2>

            <div class="flex justify-between mb-1">
                <span class="text-base font-medium text-blue-700">{{__('Bookings')}}</span>
                <span class="text-sm font-medium text-blue-700">{{ $book_af_arr
                    }}/{{$total_flights_afe_arr}}</span>
            </div>
            <div class="w-full bg-gray-200 rounded-full">
                <div class="bg-gradient-to-r from-amber-500 via-yellow-400 to-amber-300 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full"
                    style="width: {{$book_arr}}%"> {{ $book_arr }}%</div>
            </div>
        </div>
    </div>
</div>