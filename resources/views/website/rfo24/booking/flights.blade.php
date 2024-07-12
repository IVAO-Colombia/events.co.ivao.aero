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
                        <button type="button" wire:click='closeModal'
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
                        <button type="button" wire:click='closeModal'
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



        <div class="mt-6 md:flex md:items-center md:justify-between">
            <div class="inline-flex overflow-hidden bg-white border divide-x rounded-lg">
                <button wire:click='resetSearch'
                    class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 hover:bg-gray-100 sm:text-sm">
                    Mostrar todos
                </button>
                <button wire:click='ArrivalFlights'
                    class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 hover:bg-gray-100 sm:text-sm">
                    Llegadas
                </button>
                <button wire:click='DepartureFlights'
                    class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 hover:bg-gray-100 sm:text-sm">
                    Salidas
                </button>
            </div>
        </div>

        @switch($this->type)
        @case("arr")
        @include('website.rfo24.widgets.booking.arr_flights')
        @break
        @case("dpt")
        @include('website.rfo24.widgets.booking.dpt_flights')
        @break
        @default
        @include('website.rfo24.widgets.booking.all_flights')
        @endswitch
    </div>

</div>