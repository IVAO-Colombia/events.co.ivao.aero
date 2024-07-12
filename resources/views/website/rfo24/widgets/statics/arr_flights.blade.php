@php
$arr_flights= DB::select('SELECT COUNT(`flight`) FROM `flights` WHERE `type` = "arrival"');
foreach ($arr_flights as $flights_arr) {
}
$total_flights_arr = $flights_arr->{'COUNT(`flight`)'};
$bookings=DB::select('SELECT COUNT(`user_id`) FROM `flights` WHERE `type` = "arrival"');
foreach ($bookings as $book_flights_arr) {
}
if ($total_flights_arr!=0) {
$book_af_arr = $book_flights_arr->{'COUNT(`user_id`)'};
$book_arr = number_format((($book_flights_arr->{'COUNT(`user_id`)'}*100)/$total_flights_arr),0,',','.');
$total_flights_af_arr = $total_flights_arr;
$total_flights_afe_arr = $total_flights_arr-$book_af_arr;
$total_flights_arr = number_format(((($total_flights_arr-$book_af_arr)*100)/$total_flights_arr),0,',','.');
} else {
$book_af_arr = 0;
$book_arr = 0;
$total_flights_af_arr = 0;
$total_flights_afe_arr = 0;
$total_flights_arr = 0;
}
@endphp
<div class="grid grid-cols-2 justify-items-center items-center">
    <div class="col-span-2">
        <h1 class="descripRFE text-center text-3xl font-bold mb-5">{{__('Arrival statistics')}}</h1>
    </div>
    <div class="col-span-2">
        <div class="flex gap-6">
            <div class="font-semibold">
                <h5 class="mb-5 text-[#]">{{__('Booked flights')}}</h5>
                <div class="radial-progress text-[#0D2C99]" style="--value:{{$book_arr}};" role="progressbar">
                    {{$book_arr}}%
                </div>
            </div>
            <div class="font-semibold">
                <h5 class="mb-5">{{__('Available flights')}}</h5>
                <div class="radial-progress text-[#0D2C99]" style="--value:{{$total_flights_arr}};" role="progressbar">
                    {{$total_flights_arr}}%</div>
            </div>
        </div>
    </div>
</div>