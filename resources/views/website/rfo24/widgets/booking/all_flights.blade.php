<div class="flex flex-col mt-6">

    {{-- @if ($modal)
    @component('components.pilot-confirm-booking', [
    "id" => $flight_id,
    "flight" => $flight,
    "departure" => $departure,
    "destination" => $destination,
    "departure_time" => $departure_time,
    "arrival_time" => $arrival_time,
    "departure_gate" => $departure_gate,
    "destination_gate" => $destination_gate,
    "aircraft" => $aircraft,
    "information" => $information
    ])

    @endcomponent
    @endif --}}


    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                    <button class="flex items-center gap-x-3 focus:outline-none">
                        <span>{{__('Airline')}}</span>

                        <svg class="h-3" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2.13347 0.0999756H2.98516L5.01902 4.79058H3.86226L3.45549 3.79907H1.63772L1.24366 4.79058H0.0996094L2.13347 0.0999756ZM2.54025 1.46012L1.96822 2.92196H3.11227L2.54025 1.46012Z"
                                fill="currentColor" stroke="currentColor" stroke-width="0.1" />
                            <path
                                d="M0.722656 9.60832L3.09974 6.78633H0.811638V5.87109H4.35819V6.78633L2.01925 9.60832H4.43446V10.5617H0.722656V9.60832Z"
                                fill="currentColor" stroke="currentColor" stroke-width="0.1" />
                            <path
                                d="M8.45558 7.25664V7.40664H8.60558H9.66065C9.72481 7.40664 9.74667 7.42274 9.75141 7.42691C9.75148 7.42808 9.75146 7.42993 9.75116 7.43262C9.75001 7.44265 9.74458 7.46304 9.72525 7.49314C9.72522 7.4932 9.72518 7.49326 9.72514 7.49332L7.86959 10.3529L7.86924 10.3534C7.83227 10.4109 7.79863 10.418 7.78568 10.418C7.77272 10.418 7.73908 10.4109 7.70211 10.3534L7.70177 10.3529L5.84621 7.49332C5.84617 7.49325 5.84612 7.49318 5.84608 7.49311C5.82677 7.46302 5.82135 7.44264 5.8202 7.43262C5.81989 7.42993 5.81987 7.42808 5.81994 7.42691C5.82469 7.42274 5.84655 7.40664 5.91071 7.40664H6.96578H7.11578V7.25664V0.633865C7.11578 0.42434 7.29014 0.249976 7.49967 0.249976H8.07169C8.28121 0.249976 8.45558 0.42434 8.45558 0.633865V7.25664Z"
                                fill="currentColor" stroke="currentColor" stroke-width="0.3" />
                        </svg>
                    </button>
                </th>

                <th scope="col" class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                    {{__('Flight')}}
                </th>

                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                    {{__('Aircraft')}}
                </th>

                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                    {{__('Origin')}}</th>

                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                    {{__('Arrival')}}</th>

                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                    {{__('Departure Time')}}</th>
                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                    {{__('Arrival Time')}}</th>

                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                    {{__('Simbrief link')}}</th>


                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                    {{__('Status')}}</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($flights as $item)
            <tr>
                <td class="px-4 py-4 text-sm font-medium whitespace-nowrap max-w-xs">
                    <div>

                        @if (File::exists(public_path('assets/img/airlines/'. $item->getOACIAirline() .
                        '.png')))
                        <img width="200px" src="{{asset('assets/img/airlines/'. $item->getOACIAirline() . '.png')}}"
                            alt="{{$item->airline}}_Logo">
                        @else
                        <h4 class="text-gray-700 truncate text-center text-3xl">
                            {{$item->airline}}</h4>
                        @endif
                    </div>
                </td>
                <td class="px-12 py-4 text-sm font-medium whitespace-nowrap">
                    <h4 class="text-gray-700">{{$item->flight}}</h4>
                    <p class="text-sm font-normal text-gray-600 ">{{$item->airline}}</p>
                </td>
                <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">
                    <div>
                        <h4 class="text-gray-700 ">
                            {{$item->aircraft}}</h4>
                    </div>
                </td>
                <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">
                    <h4 class="text-gray-700 ">{{$item->departure}}</h4>
                </td>

                <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">
                    <h4 class="text-gray-700 ">{{$item->destination}}</h4>
                </td>

                <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">
                    {{$item->departure_time}} UTC
                </td>
                <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">
                    {{$item->arrival_time}} UTC
                </td>
                <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">
                    <a href="https://dispatch.simbrief.com/options/custom?airline={{$item->getOACIAirline()}}&fltnum={{$item->getFlightNumer()}}&type={{$item->aircraft}}&orig={{$item->departure}}&dest={{$item->destination}}&deph={{$item->getDeparturetHour()}}&depm={{$item->getDeparturetMinute()}}"
                        target="_blank" class="flex justify-center"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                            <path
                                d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z">
                            </path>
                            <path
                                d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z">
                            </path>
                        </svg></a>
                </td>
                @if ($item->user_id)
                <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">
                    <div class="inline px-3 py-1 text-sm font-normal rounded-full text-red-700 gap-x-2 bg-red-300">
                        <i class="fa-solid fa-lock"></i> {{__('Reserved by')}} <b>{{$item->user_id}}</b>
                    </div>
                </td>
                @else
                <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">
                    <button type="button" wire:click='showConfirm({{$item->id}})'
                        class="inline px-3 py-1 text-sm font-normal rounded-full text-emerald-700 gap-x-2 bg-emerald-300"><i
                            class="fa-solid fa-address-book"></i> {{__('Book')}}</a>
                </td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
</div>