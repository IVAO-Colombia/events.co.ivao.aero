<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}}</title>


    <!-- component -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    {{--
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous" />
    --}}

    <link rel="shortcut icon" href="{{asset('assets/img/symbol_WHITE.png')}}" type="image/x-icon">
    <script src="https://kit.fontawesome.com/03b0ac721b.js" crossorigin="anonymous"></script>
    @livewireStyles
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>



    <div class="loading-screen h-screen w-screen flex justify-center items-center flex-col z-[100]" id="loading-screen">
        <canvas id="loading" style="width: 500px; height: 500px;"></canvas>
    </div>


    <div class="hidden " id="content">
        @include('website.rfe24.nav')
        <div class="">
            {{$slot}}
        </div>
        <footer class="text-gray-600 body-font">
            {{-- <div
                class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
                <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left md:mt-0 mt-10">
                    <a href="https://web.co.ivao.aero" target="_blank"
                        class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                        <img width="250px" src="{{asset('assets/img/symbol-blue-ivao.png')}}" alt="IVAO COLOMBIA ICON">
                    </a>
                </div>
                <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left md:mt-0 mt-10">
                    <a href="https://web.co.ivao.aero" target="_blank"
                        class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                        <img width="250px" src="https://static.ivao.aero/img/logos/logo.svg" alt="IVAO ICON">
                    </a>
                </div>
                {{-- <div class="flex-grow flex flex-wrap md:pr-20 -mb-10 md:text-left text-center order-first">
                    <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                        <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">{{__('ATC')}}</h2>
                        <nav class="list-none mb-10">
                            <li>
                                <a class="text-gray-600 hover:text-gray-800">{{__('Booking')}}</a>
                            </li>
                            <li>
                                <a class="text-gray-600 hover:text-gray-800">{{__('Brefing')}}</a>
                            </li>
                        </nav>
                    </div>
                    <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                        <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">
                            {{__('Pilot')}}
                        </h2>
                        <nav class="list-none mb-10">
                            <li>
                                <a class="text-gray-600 hover:text-gray-800">{{__('Booking')}}</a>
                            </li>
                            <li>
                                <a class="text-gray-600 hover:text-gray-800">{{__('Brefing')}}</a>
                            </li>
                        </nav>
                    </div>
                </div>
            </div> --}}
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
        @livewireScripts
    </div>
</body>

</html>