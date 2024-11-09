@php
$all_flights= DB::select('SELECT COUNT(`flight`) FROM `flights`');

foreach ($all_flights as $flights) {
$total_flights = $flights->{'COUNT(`flight`)'};
}

$bookings=DB::select('SELECT COUNT(`user_id`) FROM `flights`');

foreach ($bookings as $book_flights) {
$book_af_all = $book_flights->{'COUNT(`user_id`)'};
$book_all = number_format((($book_flights->{'COUNT(`user_id`)'}*100)/$total_flights),0,',','.');
}

if (!$total_flights==0) {
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

<div class="col-span-2 grid grid-cols-2 justify-items-center items-center mt-5">
    <div class="flex justify-center col-span-2 w-full">

        <div x-data="{ currentBooks: {{$book_af_all}}, currentUnBook: {{$total_flights_afe}}, minVal: 0 ,maxVal: {{$total_flights_af}}, calcPercentage(min, max, val){return ((val-min)/(max-min))*100} }"
            class="flex h-5 w-full overflow-hidden rounded-xl bg-slate-100 dark:bg-slate-800">
            <div class="h-full rounded-l-xl bg-[#0D2C99] p-0.5 text-center text-sm font-semibold leading-none text-slate-100"
                :style="`width: ${calcPercentage(minVal, maxVal, currentBooks)}%`" role="progressbar"
                aria-label="progress bar A" :aria-valuenow="currentValA" :aria-valuemin="minVal"
                :aria-valuemax="maxVal">
                <span x-text="`${currentBooks} {{__('Booked flights')}}`"></span>
            </div>
            <div class="h-full rounded-r-xl bg-[#D7D7DC] p-0.5 text-center text-sm font-semibold leading-none text-slate-100"
                :style="`width: ${calcPercentage(minVal, maxVal, currentUnBook)}%`" role="progressbar"
                aria-label="progress bar C" :aria-valuenow="currentValC" :aria-valuemin="minVal"
                :aria-valuemax="maxVal">
                <span x-text="`${currentUnBook} {{__('Available flights')}}`"></span>
            </div>
        </div>
    </div>
</div>