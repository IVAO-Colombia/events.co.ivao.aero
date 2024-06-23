<div id="Modal-{{$dependence}}-{{$id}}" aria-modal="true" role="dialog"
    class="fixed top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full justify-center items-center flex">
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
                <button type="button" wire:click='booking({{$id}})'
                    class="text-white bg-ivao-blue hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    {{__('Book')}}</button>
                <button type="button" wire:click='closeModal'
                    class="text-gray-500 bg-white hover:bg-ivao-red/60 focus:ring-4 focus:outline-none focus:ring-ivao-red/60 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-slate-200 focus:z-10">Decline</button>
            </div>
        </div>
    </div>
</div>
<div class="bg-gray-900 bg-opacity-50 fixed inset-0 z-40"></div>
