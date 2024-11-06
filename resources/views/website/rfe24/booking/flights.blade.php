<div>
    <!-- component -->
    <div class="px-4 mx-auto">

        <x-modal wire:model.live='modal'>
            @isset($flight_id)
            <div class="relative w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow">
                    <!-- Modal header -->
                    <div class="flex items-start justify-between p-4 border-b rounded-t">
                        <h3 class="text-xl font-semibold text-gray-900">
                            {{__('Booking confirmation')}}
                        </h3>
                        <button type="button" wire:click='toggleModal'
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">

                        <ul class="text-base leading-relaxed text-gray-500">
                            <li>{{__('Flight number')}}: <b>{{$flight}}</b></li>
                            <li>{{__('Departure airport')}}: <b>{{$departure}}</b></li>
                            <li>{{__('Arrival airport')}}: <b>{{$destination}}</b></li>
                            <li>{{__('Departure Time')}}: <b>{{$departure_time}}</b></li>
                            <li>{{__('Arrival Time')}}: <b>{{$arrival_time}}</b></li>
                            <li>{{__('Departure gate')}}: <b>{{$departure_gate}}</b></li>
                            <li>{{__('Arrival gate')}}: <b>{{$destination_gate}}</b></li>
                            <li>{{__('Aircraft')}}: <b>{{$aircraft}}</b></li>
                            <li>{{__('Remarks')}}: <b>{{$information}}</b></li>
                        </ul>

                        <p class="text-base leading-relaxed text-gray-500">
                            {{__('You are about to reserve a slot at the RFO Colombia 2024 event. If you wish to cancel
                            this reservation, you can enter your profile and cancel.')}}
                        </p>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b">
                        <button type="button" wire:click='reserve({{$flight_id}})'
                            class="text-white bg-[#0D2C99] hover:bg-[#3C55AC] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            {{__('Book')}}</button>
                        <button type="button" wire:click='toggleModal'
                            class="text-gray-500 bg-white hover:bg-ivao-red/60 focus:ring-4 focus:outline-none focus:ring-ivao-red/60 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-slate-200 focus:z-10">Decline</button>
                    </div>
                </div>
            </div>
            @endisset
        </x-modal>
        @if (session()->has('message'))
        <div class="mt-5 flex bg-green-100 rounded-lg p-4 mb-4 text-sm text-green-700" role="alert">
            <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                    clip-rule="evenodd"></path>
            </svg>
            <div>
                <span class="font-medium">Reserva exitosa!</span> Puedes ver tu perfil para confirmar la reserva.
            </div>
        </div>
        @endif


        <div class="grid gap-5 md:mb-5">

            <div class="mt-6 md:flex md:items-center md:justify-between">
                <div class="inline-flex overflow-hidden bg-white border divide-x rounded-lg">
                    <button wire:click='resetSearch'
                        class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 hover:bg-gray-100 sm:text-sm">
                        Reiniciar filtros
                    </button>
                    <button wire:click='ArrivalFlights'
                        class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 hover:bg-gray-100 sm:text-sm">
                        {{__('Arrivals')}}
                    </button>
                    <button wire:click='DepartureFlights'
                        class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 hover:bg-gray-100 sm:text-sm">
                        {{__('Departures')}}
                    </button>

                    @if ($sort == "ASC")
                    <button wire:click='sortDecs'
                        class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 hover:bg-gray-100 sm:text-sm">

                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            style="fill: #4b5563 ;transform: ;msFilter:;">
                            <path
                                d="M19.707 14.707A1 1 0 0 0 19 13h-7v2h4.586l-4.293 4.293A1 1 0 0 0 13 21h7v-2h-4.586l4.293-4.293zM6 3.99l-4 4h3v12h2v-12h3zM17 3h-2c-.417 0-.79.259-.937.649l-2.75 7.333h2.137L14.193 9h3.613l.743 1.981h2.137l-2.75-7.333A1 1 0 0 0 17 3zm-2.057 4 .75-2h.613l.75 2h-2.113z">
                            </path>
                        </svg>
                    </button>
                    @else
                    <button wire:click='sortAsc'
                        class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 hover:bg-gray-100 sm:text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            style="fill: #4b5563 ;transform: ;msFilter:;">
                            <path
                                d="M19.707 14.707A1 1 0 0 0 19 13h-7v2h4.586l-4.293 4.293A1 1 0 0 0 13 21h7v-2h-4.586l4.293-4.293zM7 3.99H5v12H2l4 4 4-4H7zM17 3h-2c-.417 0-.79.259-.937.649l-2.75 7.333h2.137L14.193 9h3.613l.743 1.981h2.137l-2.75-7.333A1 1 0 0 0 17 3zm-2.057 4 .75-2h.613l.75 2h-2.113z">
                            </path>
                        </svg>
                    </button>
                    @endif
                </div>
            </div>

            <table class="min-w-full divide-y divide-gray-200 table-fixed">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                            {{__('Airline')}}
                        </th>

                        <th scope="col"
                            class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
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
                            <button class="flex items-center gap-x-3 focus:outline-none" wire:click='departureTime'>
                                <span>{{__('Departure Time')}}</span>

                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-gray-500" viewBox="0 0 24 24"
                                    style="transform: ;msFilter:;">
                                    <path
                                        d="M6.227 11h11.547c.862 0 1.32-1.02.747-1.665L12.748 2.84a.998.998 0 0 0-1.494 0L5.479 9.335C4.906 9.98 5.364 11 6.227 11zm5.026 10.159a.998.998 0 0 0 1.494 0l5.773-6.495c.574-.644.116-1.664-.747-1.664H6.227c-.862 0-1.32 1.02-.747 1.665l5.773 6.494z">
                                    </path>
                                </svg>
                            </button>
                        </th>
                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                            <button class="flex items-center gap-x-3 focus:outline-none" wire:click='ArrivalTime'>
                                <span>{{__('Arrival Time')}}</span>

                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-gray-500" viewBox="0 0 24 24"
                                    style="transform: ;msFilter:;">
                                    <path
                                        d="M6.227 11h11.547c.862 0 1.32-1.02.747-1.665L12.748 2.84a.998.998 0 0 0-1.494 0L5.479 9.335C4.906 9.98 5.364 11 6.227 11zm5.026 10.159a.998.998 0 0 0 1.494 0l5.773-6.495c.574-.644.116-1.664-.747-1.664H6.227c-.862 0-1.32 1.02-.747 1.665l5.773 6.494z">
                                    </path>
                                </svg>
                            </button>
                        </th>
                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                            {{__('Simbrief link')}}</th>


                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                            {{__('Status')}}</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($flights as $item)
                    <tr data-aos="zoom-in-up">
                        <td class="px-4 py-4 text-sm font-medium whitespace-nowrap max-w-xs">
                            <div>

                                @if (File::exists(public_path('assets/img/airlines/'. $item->getOACIAirline() .
                                '.png')))
                                <img width="200px"
                                    src="{{asset('assets/img/airlines/'. $item->getOACIAirline() . '.png')}}"
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
                        <td class="px-4 py-4 text-sm font-medium whitespace-nowrap text-center">
                            <a href="https://dispatch.simbrief.com/options/custom?airline={{$item->getOACIAirline()}}&fltnum={{$item->getFlightNumer()}}&type={{$item->aircraft}}&orig={{$item->departure}}&dest={{$item->destination}}&deph={{$item->getDeparturetHour()}}&depm={{$item->getDeparturetMinute()}}"
                                target="_blank" class="flex justify-center"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24"
                                    style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
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
                            <div
                                class="inline px-3 py-1 text-sm font-normal rounded-full text-red-700 gap-x-2 bg-red-300">
                                <i class="fa-solid fa-lock"></i> {{__('Reserved by')}} <b><a
                                        href="https://ivao.aero/Member.aspx?Id={{$item->user_id}}" class="underline"
                                        target=_blank>{{$item->user_id}}</a></b>
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
            <div class="flex items-center justify-center">
                <div class="w-3/5">
                    {{ $flights->links() }}
                    <div class=""></div>
                </div>
            </div>
        </div>
    </div>

</div>


{{-- @switch($this->type)
@case("arr")
@include('website.rfe24.widgets.booking.arr_flights')
@break
@case("dpt")
@include('website.rfe24.widgets.booking.dpt_flights')
@break
@default
@include('website.rfe24.widgets.booking.all_flights')
@endswitch --}}