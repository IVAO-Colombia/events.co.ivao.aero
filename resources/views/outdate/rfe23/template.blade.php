<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- component -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,600&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="{{asset('assets/img/symbol_WHITE.png')}}" type="image/x-icon">
    <script src="https://kit.fontawesome.com/03b0ac721b.js" crossorigin="anonymous"></script>
    @livewireStyles
</head>

<body>
    <div class="grid grid-cols-1 h-screen items-end content-between">
        <header>
            <nav class="flex justify-between place-items-center alin w-full bg-neutral-950 text-white px-4">
                <a href="{{route('home')}}"><img width="250px" src="{{asset('assets/img/Logo_WHITE.png')}}"
                        alt="IVAO COLOMBIA ICON"></a>

                <div class="md:items-center md:w-auto md:flex hidden">
                    <h4 id="countdown" class="text-2xl">
                        @include('website/rfe23/widgets/nav/countdown')
                    </h4>
                </div>

                <div class="md:items-center md:w-auto flex">
                    <div class="md:flex hidden">
                        <div class="atc_dropdown">
                            <button id="atcDropdown" data-dropdown-toggle="dropdownDelayAtc"
                                data-dropdown-trigger="hover" data-dropdown-delay='80'
                                class="block md:text-white mr-4 hover:text-neutral-400" type="button"><i
                                    class="fa-solid fa-headset"></i> {{__('ATC')}}
                                <svg class="w-2.5 h-2.5 inline" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdownDelayAtc"
                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                                <ul class="py-2 text-sm text-gray-700" aria-labelledby="atcDropdown">
                                    <li>
                                        <a href="{{route('booking.atc')}}" class="block px-4 py-2 hover:bg-gray-100">
                                            {{__('Book')}}</a>
                                    </li>
                                    <li>
                                        <a href="https://forum.ivao.aero/threads/rfe-bogota-2023.377365/"
                                            target="_blank"
                                            class="block px-4 py-2 hover:bg-gray-100">{{__('Brefing')}}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="pilot_dropdown">
                            <button id="pilotDropDown" data-dropdown-toggle="dropdownDelayPilot"
                                data-dropdown-trigger="hover" data-dropdown-delay='80'
                                class="block md:text-white mr-4 hover:text-neutral-400" type="button"> <i
                                    class="fas fa-user-tie fa-fw"></i> {{__('Pilot')}}
                                <svg class="w-2.5 h-2.5 inline" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdownDelayPilot"
                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                                <ul class="py-2 text-sm text-gray-700">
                                    <li>
                                        <a href="{{route('booking.pilot')}}"
                                            class="block px-4 py-2 hover:bg-gray-100">{{__('Book')}}</a>
                                    </li>
                                    <li>
                                        <a href="https://forum.ivao.aero/threads/rfe-bogota-2023.377365/"
                                            target="_blank"
                                            class="block px-4 py-2 hover:bg-gray-100">{{__('Brefing')}}</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <a class="block md:text-white mr-4 hover:text-neutral-400" href="{{route('booking.stats')}}"><i
                                class="fa-solid fa-square-poll-vertical"></i> {{__('Stats')}}</a>

                    </div>
                    @guest
                    <div class="flex text-sm">
                        <a class="p-2 ml-2 bg-ivao-blue font-semibold leading-none border border-ivao-light-blue rounded hover:border-ivao-blue hover:bg-ivao-light-blue"
                            href="{{route('ivao.login-sso')}}">Login IVAO SSO</a>
                    </div>
                    @endguest
                    @auth
                    <div class="user_dropdown">
                        <button id="userDropdown" data-dropdown-toggle="dropdownDelayUser" data-dropdown-trigger="hover"
                            data-dropdown-delay='80' class="block md:text-white mr-4 hover:text-neutral-400"
                            type="button">{{
                            Auth::user()->firstname }} - {{ Auth::user()->vid }}
                            <svg class="w-2.5 h-2.5 inline" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdownDelayUser"
                            class="z-10 hidden bg-white divide-y divide-solid divide-red-100 rounded-lg shadow w-44">
                            <ul class="py-2 text-sm text-gray-700" aria-labelledby="userDropdown">
                                <li>
                                    <a href="{{route('dashboard')}}" class="block px-4 py-2 hover:bg-gray-100">{{__('My
                                        Bookings')}}</a>
                                </li>
                                <div class="py-2">
                                    <a href="{{route('logout')}}"
                                        class="block px-4 py-2 text-sm text-red-700 hover:bg-gray-100">{{__('Logout')}}</a>
                                </div>
                            </ul>
                        </div>
                    </div>
                    @endauth
                    <div class="lenguaje_dropdown mx-2">
                        <button id="lenguajeDropDown" data-dropdown-toggle="dropdownDelayLenguaje"
                            data-dropdown-trigger="hover" data-dropdown-delay='80'
                            class="block md:text-white mr-4 hover:text-neutral-400" type="button"><i
                                class="fa-solid fa-globe"></i>
                            <svg class="w-2.5 h-2.5 inline" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdownDelayLenguaje"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                            <ul class="py-2 text-sm text-gray-700">
                                <li>
                                    <a href="{{ url('locale/en') }}"
                                        class="block px-4 py-2 hover:bg-gray-100">{{__('English')}}</a>
                                </li>
                                <li>
                                    <a href="{{ url('locale/es') }}"
                                        class="block px-4 py-2 hover:bg-gray-100">{{__('Spanish')}}</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </nav>
        </header>
        @yield('content')
        <footer class="text-gray-600 body-font object-bottom">
            <div class="bg-gray-100">
                <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
                    <p class="text-gray-500 text-sm text-center sm:text-left">© {{ date('Y') }} —
                        <a href="https://web.co.ivao.aero" rel="noopener noreferrer" class="text-gray-600 ml-1"
                            target="_blank">IVAO COLOMBIA</a>
                    </p>
                    <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
                        <a class="text-gray-500" href="https://www.facebook.com/ivaoco">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                            </svg>
                        </a>
                        <a class="ml-3 text-gray-500" href="https://twitter.com/IVAOCO">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                class="w-5 h-5" viewBox="0 0 24 24">
                                <path
                                    d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                </path>
                            </svg>
                        </a>
                        <a class="ml-3 text-gray-500" href="https://www.instagram.com/ivao.co/">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                            </svg>
                        </a>
                    </span>
                </div>
            </div>
        </footer>
    </div>
    @livewireScripts
</body>

</html>