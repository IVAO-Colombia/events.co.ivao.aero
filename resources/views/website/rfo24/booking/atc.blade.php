<div class="">

    <x-modal wire:model='modal'>
        <div class="relative w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Confirmacion de reserva
                    </h3>
                    <button type="button" wire:click='closeModal'
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">

                    <ul class="text-base leading-relaxed text-gray-500">
                        <li>{{__('Facility')}}: <b>{{$dependence}}</b></li>
                        <li>{{__('Starting from')}}: <b>{{$start_at}}</b></li>
                        <li>{{__('Closing at')}}: <b>{{$end_at}}</b></li>
                    </ul>

                    <p class="text-base leading-relaxed text-gray-500">
                        {{__('You are about to reserve a slot at the RFE Colombia 2023 event. If you wish to cancel this
                        reservation, you can enter your profile and cancel.')}}
                    </p>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b">
                    <button type="button" wire:click='booking({{$booking_id}})'
                        class="text-white bg-[#0D2C99] hover:bg-[#3C55AC] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        {{__('Book')}}</button>
                    <button type="button" wire:click='closeModal'
                        class="text-gray-500 bg-white hover:bg-[#E93434]/60 focus:ring-4 focus:outline-none focus:ring-[#E93434]/60 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-slate-200 focus:z-10">Decline</button>
                </div>
            </div>
        </div>
    </x-modal>

    <div class="row">
        <div class="col-md-12 text-center my-3 font-bold text-2xl">
            <h1>ATC Booking</h1>
        </div>
    </div>

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

    <div class="table-container m-5">
        @include('website.rfo24.widgets.booking.atc_list')
        <div class="clearfix" style="height: 2rem">
        </div>
    </div>