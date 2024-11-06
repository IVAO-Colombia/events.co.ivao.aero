<div>
    <!-- component -->
    <style>
        .barcode {
            left: 50%;
            box-shadow: 1px 0 0 1px, 5px 0 0 1px, 10px 0 0 1px, 11px 0 0 1px, 15px 0 0 1px, 18px 0 0 1px, 22px 0 0 1px, 23px 0 0 1px, 26px 0 0 1px, 30px 0 0 1px, 35px 0 0 1px, 37px 0 0 1px, 41px 0 0 1px, 44px 0 0 1px, 47px 0 0 1px, 51px 0 0 1px, 56px 0 0 1px, 59px 0 0 1px, 64px 0 0 1px, 68px 0 0 1px, 72px 0 0 1px, 74px 0 0 1px, 77px 0 0 1px, 81px 0 0 1px, 85px 0 0 1px, 88px 0 0 1px, 92px 0 0 1px, 95px 0 0 1px, 96px 0 0 1px, 97px 0 0 1px, 101px 0 0 1px, 105px 0 0 1px, 109px 0 0 1px, 110px 0 0 1px, 113px 0 0 1px, 116px 0 0 1px, 120px 0 0 1px, 123px 0 0 1px, 127px 0 0 1px, 130px 0 0 1px, 131px 0 0 1px, 134px 0 0 1px, 135px 0 0 1px, 138px 0 0 1px, 141px 0 0 1px, 144px 0 0 1px, 147px 0 0 1px, 148px 0 0 1px, 151px 0 0 1px, 155px 0 0 1px, 158px 0 0 1px, 162px 0 0 1px, 165px 0 0 1px, 168px 0 0 1px, 173px 0 0 1px, 176px 0 0 1px, 177px 0 0 1px, 180px 0 0 1px;
            display: inline-block;
            transform: translateX(-90px);
        }
    </style>

    <div class="p-5 grid auto-rows-auto">

        @if (!count($bookingsAtc) > 0 && !count($flights) > 0)
        <div class="">
            <div class="hero bg-base-100 md:h-[75svh]">
                <div class="hero-content flex-col lg:flex-row-reverse">
                    <img src="{{asset('assets/img/no_book.png')}}" class="max-w-sm rounded-lg shadow-2xl" />
                    <div>
                        <h1 class="text-5xl font-bold">{{__("You don't have any booking")}}</h1>
                        <p class="py-6">
                            {{__("common.noBook")}}
                        </p>
                        <a href="{{route('booking.pilot')}}" class="btn btn-primary">{{__('Book now')}}</a>
                    </div>
                </div>
            </div>
        </div>

        @else

        <div class="mb-5">
            <h2 class="text-4xl font-semibold">{{__('Bookings')}}</h2>
        </div>

        <div x-data="{ selectedTab: 'pilot' }" class="w-full">
            <div @keydown.right.prevent="$focus.wrap().next()" @keydown.left.prevent="$focus.wrap().previous()"
                class="flex gap-2 overflow-x-auto border-b border-slate-300 dark:border-slate-700" role="tablist"
                aria-label="tab options">
                <button @click="selectedTab = 'pilot'" :aria-selected="selectedTab === 'pilot'"
                    :tabindex="selectedTab === 'pilot' ? '0' : '-1'"
                    :class="selectedTab === 'pilot' ? 'font-bold text-blue-700 border-b-2 border-blue-700 dark:border-blue-600 dark:text-blue-600' : 'text-slate-700 font-medium dark:text-slate-300 dark:hover:border-b-slate-300 dark:hover:text-white hover:border-b-2 hover:border-b-slate-800 hover:text-black'"
                    class="flex h-min items-center gap-2 px-4 py-2 text-sm" type="button" role="tab" {{count($flights)>
                    0 ? "" : "disabled" }}
                    aria-controls="tabpanelPilot">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                        class="size-4">
                        <path
                            d="M10 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM6 8a2 2 0 1 1-4 0 2 2 0 0 1 4 0ZM1.49 15.326a.78.78 0 0 1-.358-.442 3 3 0 0 1 4.308-3.516 6.484 6.484 0 0 0-1.905 3.959c-.023.222-.014.442.025.654a4.97 4.97 0 0 1-2.07-.655ZM16.44 15.98a4.97 4.97 0 0 0 2.07-.654.78.78 0 0 0 .357-.442 3 3 0 0 0-4.308-3.517 6.484 6.484 0 0 1 1.907 3.96 2.32 2.32 0 0 1-.026.654ZM18 8a2 2 0 1 1-4 0 2 2 0 0 1 4 0ZM5.304 16.19a.844.844 0 0 1-.277-.71 5 5 0 0 1 9.947 0 .843.843 0 0 1-.277.71A6.975 6.975 0 0 1 10 18a6.974 6.974 0 0 1-4.696-1.81Z" />
                    </svg>
                    {{__('Pilot')}}
                    <span
                        :class="selectedTab === 'pilot' ? 'border-blue-700 bg-blue-700/10 dark:bg-blue-600 dark:border-blue-600 dark:text-slate-100' : 'border-slate-300 dark:border-slate-700 bg-slate-100 dark:bg-slate-800'"
                        class="text-xs font-medium px-1 rounded-full border">{{count($flights)}}</span>
                </button>
                <button @click="selectedTab = 'atc'" :aria-selected="selectedTab === 'atc'"
                    :tabindex="selectedTab === 'atc' ? '0' : '-1'" {{count($bookingsAtc)>
                    0 ? "" : "disabled" }}
                    :class="selectedTab === 'atc' ? 'font-bold text-blue-700 border-b-2 border-blue-700
                    dark:border-blue-600 dark:text-blue-600' : 'text-slate-700 font-medium dark:text-slate-300
                    dark:hover:border-b-slate-300 dark:hover:text-white hover:border-b-2 hover:border-b-slate-800
                    hover:text-black'"
                    class="flex h-min items-center gap-2 px-4 py-2 text-sm" type="button" role="tab"
                    aria-controls="tabpanelAtc">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                        class="size-4">
                        <path
                            d="m9.653 16.915-.005-.003-.019-.01a20.759 20.759 0 0 1-1.162-.682 22.045 22.045 0 0 1-2.582-1.9C4.045 12.733 2 10.352 2 7.5a4.5 4.5 0 0 1 8-2.828A4.5 4.5 0 0 1 18 7.5c0 2.852-2.044 5.233-3.885 6.82a22.049 22.049 0 0 1-3.744 2.582l-.019.01-.005.003h-.002a.739.739 0 0 1-.69.001l-.002-.001Z" />
                    </svg>
                    {{__('ATC')}}
                    <span
                        :class="selectedTab === 'atc' ? 'border-blue-700 bg-blue-700/10 dark:bg-blue-600 dark:border-blue-600 dark:text-slate-100' : 'border-slate-300 dark:border-slate-700 bg-slate-100 dark:bg-slate-800'"
                        class="text-xs border font-medium px-1 rounded-full">{{count($bookingsAtc)}}</span>
                </button>
            </div>
            <div class="px-2 py-4 text-slate-700 dark:text-slate-300">
                <div x-show="selectedTab === 'pilot'" id="tabpanelGroups" role="tabpanel" aria-label="pilot">
                    @if(count($flights) > 0 )
                    <div class="grid gap-2 lg:grid-cols-3 mx-5 grid-cols-1">
                        @foreach ($flights as $item)
                        <div class="max-w-md w-full h-full mx-auto z-10 bg-[#0D2C99] rounded-3xl">
                            <div class="flex flex-col">
                                <div class="bg-white relative drop-shadow-2xl  rounded-3xl p-4 m-4">
                                    <div class="flex-none sm:flex">
                                        <div class="flex-auto justify-evenly">

                                            <div class="flex items-center">
                                                <div class="flex flex-col">
                                                    <h2 class="font-medium">{{$item->airline}}</h2>
                                                </div>
                                                <div class="flex flex-col mx-auto text-[#0D2C99]">{{$item->aircraft}}
                                                </div>
                                                <div class="flex flex-col">
                                                    <button type="button"
                                                        wire:confirm.prompt="Are you sure?\n\nWrite 'UNBOOK' to delete this reservation|UNBOOK"
                                                        wire:click='unbookFlights("{{$item->id}}")'
                                                        class="bg-[#0D2C99] rounded p-1 text-white hover:bg-[#E93434]">
                                                        Cancelar reserva
                                                    </button>
                                                </div>
                                            </div>

                                            <div class=" border-dashed border-b-2 my-5"></div>

                                            <div class="flex items-center">
                                                <div class="flex flex-col">
                                                    <div class="flex-auto text-xs text-gray-400 my-1">
                                                        <span class="mr-1 ">Departure</span>
                                                    </div>
                                                    <div
                                                        class="w-full flex-none text-lg text-[#0D2C99] font-bold leading-none">
                                                        {{$item->departure}}
                                                    </div>

                                                </div>
                                                <div class="flex flex-col mx-auto">
                                                    <img src="{{asset('assets/img/symbol-blue-ivao.png')}}"
                                                        alt="IVAO_SYMBOL" class="w-24 p-1">

                                                </div>
                                                <div class="flex flex-col ">
                                                    <div class="flex-auto text-xs text-gray-400 my-1">
                                                        <span class="mr-1">Arrival</span>
                                                    </div>
                                                    <div
                                                        class="w-full flex-none text-lg text-[#0D2C99] font-bold leading-none">
                                                        {{$item->destination}}
                                                    </div>

                                                </div>
                                            </div>

                                            <div class=" border-dashed border-b-2 my-5 pt-5">
                                                <div class="absolute rounded-full w-5 h-5 bg-[#0D2C99] -mt-2 -left-2">
                                                </div>
                                                <div class="absolute rounded-full w-5 h-5 bg-[#0D2C99] -mt-2 -right-2">
                                                </div>
                                            </div>

                                            <div class="flex items-center mb-5 p-5 text-sm">
                                                <div class="flex flex-col">
                                                    <span class="text-sm">Flight</span>
                                                    <div class="font-semibold">{{$item->flight}}</div>

                                                </div>
                                                <div class="flex flex-col ml-auto">
                                                    <span class="text-sm">Gate</span>
                                                    <div class="font-semibold">{{$item->departure_gate}}</div>

                                                </div>
                                            </div>
                                            <div class="flex items-center mb-4 px-5">
                                                <div class="flex flex-col text-sm">
                                                    <span class="">Departure time</span>
                                                    <div class="font-semibold">{{$item->departure_time}}</div>

                                                </div>
                                                <div class="flex flex-col mx-auto text-sm">
                                                    <span class="">Remark</span>
                                                    <div class="font-semibold">{{$item->information}}</div>

                                                </div>
                                                <div class="flex flex-col text-sm">
                                                    <span class="">Arrival Time</span>
                                                    <div class="font-semibold">{{$item->arrival_time}}</div>

                                                </div>
                                            </div>
                                            <div class="border-dashed border-b-2 my-5 pt-5">
                                                <div class="absolute rounded-full w-5 h-5 bg-[#0D2C99] -mt-2 -left-2">
                                                </div>
                                                <div class="absolute rounded-full w-5 h-5 bg-[#0D2C99] -mt-2 -right-2">
                                                </div>
                                            </div>
                                            <div class="flex items-center px-5 pt-3 text-sm">
                                                <div class="flex flex-col">
                                                    <span class="">Pilot</span>
                                                    <div class="font-semibold">{{Auth::user()->firstname}}</div>
                                                </div>
                                                <div class="flex flex-col mx-auto">
                                                    <span class="">Rank</span>
                                                    <div class="font-semibold">
                                                        <img src="https://www.ivao.aero/data/images/ratings/pilot/{{Auth::user()->ratingpilot}}.gif"
                                                            alt="{{Auth::user()->ratingpilot}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col py-5  justify-center text-sm ">
                                                <h6 class="font-bold text-center">Boarding Pass</h6>

                                                <div class="barcode h-14 w-0 inline-block mt-4 relative left-auto">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        @endforeach

                    </div>
                    @endif
                </div>
                <div x-show="selectedTab === 'atc'" id="tabpanelAtc" role="tabpanel" aria-label="atc">
                    @if(count($bookingsAtc) > 0)

                    <div class="m-5">
                        <h2 class="text-2xl font-bold">Reservas ATC:</h2>
                    </div>

                    <div
                        class="mx-center grid gap-2 sm:grid-cols-2 lg:grid-cols-3 lg:justify-center  sm:justify-center grid-cols-1">
                        @foreach ($bookingsAtc as $item)
                        <div
                            class="w-full max-w-sm overflow-hidden rounded-lg bg-white shadow-md duration-300 hover:scale-105 hover:shadow-xl">

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 60" fill="currentColor"
                                class="mx-auto mt-8 h-16 w-16 text-[#0D2C99]">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M42,25H18V24h2a1,1,0,0,0,1-1V20a1,1,0,0,0-.87-1l.75-6H22a1,1,0,0,0,0-2H20.72L20,8.68A1,1,0,0,0,19,8H15V6a1,1,0,0,0-2,0V8H9a1,1,0,0,0-.95.68L7.28,11H6a1,1,0,0,0,0,2H7.12l.75,6A1,1,0,0,0,7,20v3a1,1,0,0,0,1,1h2V42a1,1,0,0,0,1,1H39a1,1,0,0,0,1-1V31h2a1,1,0,0,0,1-1V26A1,1,0,0,0,42,25ZM9.88,19l-.75-6H13v6ZM15,13h3.87l-.75,6H15ZM9.72,10h8.56l.33,1H9.39ZM9,21H19v1H9Zm3,3h4V41H12ZM25,41H23V35h2Zm2-6h2v6H27Zm4,6V35h2v6Zm7,0H35V34a1,1,0,0,0-1-1H22a1,1,0,0,0-1,1v7H18V31H38Zm3-12H18V27H41Z" />
                            </svg>
                            <h1 class="mt-2 text-center text-2xl font-bold text-gray-500">{{$item->dependence}}</h1>
                            <p class="my-4 text-center text-sm text-gray-500">{{$item->start_at}}z - {{$item->end_at}}z
                            </p>
                            <div class="space-x-4 bg-gray-100 py-4 text-center">
                                <button wire:click='unbookAtc({{$item->id}})'
                                    class="inline-block rounded-md bg-[#E93434] px-10 py-2 font-semibold text-red-100 shadow-md duration-75 hover:bg-red-400">Unbook</button>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
        </div>


        @endif


        <div class="clearfix" style="height: 2rem">
        </div>
    </div>
</div>
</div>