@php
$all_flights= DB::select('SELECT COUNT(`flight`) FROM `flights`');
foreach ($all_flights as $flights) {
}
$total_flights = $flights->{'COUNT(`flight`)'};
$bookings=DB::select('SELECT COUNT(`user_id`) FROM `flights`');
foreach ($bookings as $book_flights) {
}
if (!$total_flights==0) {
$book_af_all = $book_flights->{'COUNT(`user_id`)'};
$book_all = number_format((($book_flights->{'COUNT(`user_id`)'}*100)/$total_flights),0,',','.');
$total_flights_af = $total_flights;
$total_flights_afe = $total_flights-$book_af_all;
$total_flights = number_format(((($total_flights-$book_af_all)*100)/$total_flights),0,',','.');
} else {
$book_af_all = 0;
$book_all = 0;
$total_flights_af = 0;
$total_flights = 0;
$total_flights_afe = 0;
}
@endphp
<div class="col-span-2 grid grid-cols-2 justify-items-center items-center">
    <div class="col-span-2">
        <h1 class="descripRFE text-center text-3xl font-bold mb-5">{{__('General flight statistics')}}</h1>
    </div>
    <div class="col-span-2">
        <div class="flex gap-6">
            <div class="font-semibold">
                <h5 class="mb-5">{{__('Booked flights')}}</h5>
                <div class="radial-progress text-[#0D2C99]" style="--value:{{$book_all}};" role="progressbar">
                    {{$book_all}}%
                </div>
            </div>
            <div class="font-semibold">
                <h5 class="mb-5">{{__('Available flights')}}</h5>
                <div class="radial-progress text-[#0D2C99]" style="--value:{{$total_flights}};" role="progressbar">
                    {{$total_flights}}%</div>
            </div>
        </div>
    </div>
</div>