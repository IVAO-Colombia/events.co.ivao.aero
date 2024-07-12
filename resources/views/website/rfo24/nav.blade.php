<nav class="w-full z-20 top-0 start-0  text-white {{Route::is('home') ? 'bg-transparent  fixed': 'bg-black sticky'}}"
    id="nav-home" data-color="#000000">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="{{route('home')}}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{asset('assets/img/Logo_WHITE.png')}}" class="h-16" alt="Flowbite Logo">
        </a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse md:w-[25%]">
            <div class="flex gap-6">
                @guest
                <a href="{{route('ivao.login-sso')}}"
                    class="text-white bg-[#0D2C99] flex items-center hover:bg-[#3C55AC] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm pr-5 text-center">
                    <svg version="1.0" id="Ebene_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" class="h-16 w-16" viewBox="0 0 1991 1993"
                        fill="currentColor" xml:space="preserve">
                        <style type="text/css">
                            .st0 {
                                clip-path: url(#SVGID_2_);
                                fill: #FFFFFF;
                            }

                            .st1 {
                                clip-path: url(#SVGID_2_);
                                fill: #D53640;
                            }

                            .st2 {
                                clip-path: url(#SVGID_2_);
                                fill: #FFDD43;
                            }

                            .st3 {
                                clip-path: url(#SVGID_2_);
                                fill: #2047AB;
                            }
                        </style>
                        <g>
                            <defs>
                                <path id="SVGID_1_" d="M1306.5,1509c-109.3,0-198.5-89.4-198.5-199s89.2-199,198.5-199s198.5,89.4,198.5,199
			S1415.8,1509,1306.5,1509z" />
                            </defs>
                            <clipPath id="SVGID_2_">
                                <use xlink:href="#SVGID_1_" style="overflow:visible;" />
                            </clipPath>
                            <rect x="1007" y="1108" class="st0" width="598" height="404" />
                            <path class="st1"
                                d="M1605,1410.5h-598v90.2c0,5.9,4.6,10.6,10.3,10.6h577.4c5.7,0,10.3-4.8,10.3-10.6V1410.5z" />
                            <path class="st2"
                                d="M1605,1309.7h-598v-191.1c0-5.9,4.6-10.6,10.3-10.6h577.4c5.7,0,10.3,4.8,10.3,10.6V1309.7z" />
                            <path class="st3" d="M1605,1309.7h-598v100.8h598V1309.7z" />
                        </g>
                        <path class="st4" d="M1306.3,1115.8c106.6,0,194,87.5,194,194.3c0,106.8-87.3,194.3-194,194.3c-106.6,0-194-87.5-194-194.3
                            C1112.4,1203.3,1199.7,1115.8,1306.3,1115.8z M1306.3,1108.1c-111.3,0-201.7,90.6-201.7,202c0,111.5,90.4,202,201.7,202
                            c111.3,0,201.7-90.6,201.7-202C1508,1198.6,1417.6,1108.1,1306.3,1108.1z" />
                        <path class="st5" d="M1027.1,1029c-0.2,0-25.1-3.2-28-3.3c-0.3,0-0.6,0-1,0c-2.3-0.1-6.1-0.2-9-0.4c-2-0.1-4.2-1.8-4.3-3.7
                            c0-1,0-2.2-0.1-3.3c0-1,0-2.1,0-3c0-4.3,0.5-11.4,0.7-13c0-0.1,0.1-0.2,0.1-0.3c0.2-0.3,0.5-0.3,0.8-0.3h5.5c0.9,0,0.9,2.1,0.8,3.4
                            c0,0.1,0,0.2,0,0.2c0,1.2-0.3,9.9-0.3,11.1c0,1.3,2.4,2.3,5.5,2.2c3-0.1,29.3-1.6,29.8-1.7c0,0,0,0,0,0l0.1,0
                            c3.1-0.1,54.9-2.4,60.4-2.7c5.7-0.3,6.6-8.7,6.5-15.2c-0.1-4-1-8-1.6-10.4c-0.4-1.4-1.7-2.4-3.2-2.4l-6.6-0.2c-1,0-1.8-0.9-1.7-1.9
                            c0.1-1,0.9-1.7,1.8-1.6l16.4,0.7c1.6,0.1,3,1.3,3.8,2.7c0.6,1,1.5,2,2.7,2c0.8,0,1.4-0.3,1.8-0.8c0.1-0.1,0.2-0.2,0.2-0.3
                            c1.2-1.4,2.6-3,4.4-3c1.9,0.1,3.4,1.6,3.3,3.5c0,3.1-0.1,7.6-0.2,9.9c0,3.8,1.7,7.4,4.1,7.5c1,0.1,1.7-0.4,2.2-1
                            c1.2-1.4,2.6-2.9,4.5-2.8l5.6,0.2c1.9,0.1,3.3,1.7,4,3.5c0.5,1.3,1.3,2.4,2.8,2.4c1.6,0.1,2.5-1,3.1-2.2c0.8-1.7,2.3-3.2,4.2-3.1
                            l35.9,1.3c1.2,0,2.1,0.9,3.1,1.8c0.5,0.5,1,0.9,1.5,1.2c0.3,0.2,0.6,0.3,1,0.3c0.7,0,1.3-0.3,1.8-0.8c1.1-1,2.4-2.1,4-2.1l14.3,0.4
                            c1,0,2.1-0.4,2.8-1.2l0.3-0.3c1.4-1.6,3.8-1.6,5.4-0.2c2.3,2,5.7,4.4,8.1,4.4c4.2,0,11.1-5.7,13.8-11.7c1.2-2.7,1.8-5,2.2-6.7
                            c0.4-1.9,2-3.5,4-3.5c16.3,0,84.3-0.2,90.9-0.2c7.5-0.1,8.3-19.5,7.8-18.2c-0.3,0.7-1.2,3.3-2,5.3c-0.5,1.5-2,2.4-3.6,2.3
                            l-102.2-8.3c-1.1-0.1-2.1-0.7-2.9-1.5c-1.5-1.7-4.7-4.3-9.5-4.6c-4.5-0.3-7.7,1.7-9.4,3.2c-1,0.9-2.3,1.4-3.7,1.2l-86.8-14
                            c-1.1-0.2-2.1-0.9-2.7-1.8c-1.9-2.7-6.8-8-15.2-8.2c-4.9-0.2-7.7,1.1-9.3,2.4c-1.4,1.2-3.4,2.3-5.2,2c-90.1-16-99.1-25.5-100-26.9
                            c-0.1-0.1-0.1-0.2-0.1-0.4c-0.2-1.6-1.3-13-1.3-29.6c0-66.7-28.1-104.8-39.5-104.8c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0
                            c-11.3,0-39.5,38.1-39.5,104.8c0,16.6-1.1,28-1.3,29.6c0,0.1,0,0.3-0.1,0.4c-0.9,1.4-9.9,10.9-100,26.9c-1.8,0.3-3.8-0.9-5.2-2
                            c-1.6-1.3-4.4-2.6-9.3-2.4c-8.4,0.2-13.3,5.5-15.2,8.2c-0.7,0.9-1.6,1.6-2.7,1.8l-86.9,14c-1.3,0.2-2.6-0.3-3.7-1.2
                            c-1.7-1.5-4.9-3.5-9.4-3.2c-4.8,0.3-7.9,2.9-9.5,4.6c-0.8,0.8-1.8,1.4-2.9,1.5l-102.2,8.3c-1.6,0.1-3.1-0.8-3.6-2.3
                            c-0.7-2-1.7-4.5-2-5.3c-0.5-1.3,0.3,18.1,7.8,18.2c6.6,0,74.6,0.2,90.9,0.2c2,0,3.6,1.6,4,3.5c0.4,1.7,1,4,2.2,6.7
                            c2.7,6,9.5,11.7,13.7,11.7c2.5,0.1,5.8-2.3,8.1-4.4c1.6-1.4,4-1.3,5.4,0.2l0.3,0.3c0.7,0.8,1.7,1.2,2.8,1.2l14.3-0.4
                            c1.5,0,2.8,1,4,2.1c0.5,0.4,1.1,0.8,1.8,0.8c0.4,0,0.7-0.1,1-0.3c0.5-0.3,1-0.8,1.5-1.2c0.9-0.9,1.9-1.7,3.1-1.8l35.9-1.3
                            c1.9-0.1,3.4,1.4,4.2,3.1c0.6,1.2,1.5,2.4,3.1,2.2c1.5,0,2.4-1.1,2.9-2.4c0.7-1.8,2.1-3.4,4-3.5l5.6-0.2c1.8-0.1,3.3,1.4,4.5,2.8
                            c0.5,0.6,1.2,1,2.2,1c2.4-0.1,4.1-3.7,4.1-7.5c-0.1-2.3-0.2-6.7-0.2-9.9c0-1.9,1.5-3.5,3.3-3.5c1.8-0.1,3.2,1.5,4.4,3
                            c0.1,0.1,0.2,0.2,0.2,0.3c0.4,0.5,1,0.8,1.8,0.8c1.3,0,2.1-0.9,2.7-2c0.8-1.4,2.1-2.7,3.8-2.7l16.4-0.7c1,0,1.8,0.7,1.8,1.6
                            c0.1,1-0.7,1.9-1.7,1.9l-6.6,0.2c-1.5,0-2.8,1-3.2,2.4c-0.6,2.4-1.5,6.3-1.6,10.4c-0.1,6.5,0.8,14.9,6.5,15.2
                            c5.7,0.2,60.1,2.7,60.6,2.7c0,0,0,0,0,0c0.5,0,26.8,1.5,29.8,1.7c3.1,0.1,5.5-0.9,5.5-2.2c0-1.2-0.2-9.9-0.3-11.1c0-0.1,0-0.2,0-0.2
                            c-0.1-1.3-0.1-3.4,0.8-3.4h5.5c0.3,0,0.6,0.1,0.8,0.3c0.1,0.1,0.1,0.2,0.1,0.3c0.3,1.6,0.7,8.7,0.7,13c0,1,0,2,0,3.1
                            c0,1.2,0,2.3-0.1,3.3c-0.1,2-2.3,3.6-4.3,3.7c-2.7,0.2-6.4,0.3-8.6,0.4c-0.5,0-1,0-1.3,0c-2.9,0.1-27.8,3.3-28,3.3h0h0
                            c-0.7,0.1-53.3,6.5-54.7,6.8c-1.4,0.2-1.3,2.7,0,2.7c0.2,0,1.4,0.1,3.3,0.2c9.8,0.6,38.9,2.4,57.8,1.8c19.3-0.7,43.1-1.5,49.7-1.7
                            c1.1,0,2.2,0.4,2.9,1.3c2.7,3.1,9.9,10.9,15.7,13c-0.5,0.4-0.7,0.6,0,0.6h2.7c0,0,0,0,0,0h3c0.7,0,0.6-0.2,0-0.6
                            c5.8-2.1,13-9.9,15.7-13c0.7-0.8,1.8-1.3,2.9-1.3c6.6,0.2,30.3,1.1,49.7,1.7c18.8,0.5,48-1.2,57.8-1.8c1.9-0.1,3.1-0.2,3.3-0.2
                            c1.3,0,1.4-2.4,0-2.7C1080.4,1035.5,1027.3,1029,1027.1,1029L1027.1,1029L1027.1,1029z" />
                        <path class="st4" d="M950.8,485C692.5,485,483,694.5,483,952.8c0,258.4,209.5,467.8,467.8,467.8c37.9,0,74.6-4.5,109.9-13
                            c-4.3-11.4-7.9-23.2-10.6-35.4c-31.9,7.5-65.1,11.5-99.2,11.5c-238,0-431-192.9-431-431c0-238,193-431,431-431
                            c238,0,431,193,431,431c0,36.5-4.5,72-13.1,105.9c12.1,2.9,23.8,6.7,35.2,11.2c9.7-37.4,14.8-76.7,14.8-117.1
                            C1418.7,694.5,1209.2,485,950.8,485z" />
                    </svg>
                    <span>
                        {{__('Log
                        in with IVAO SSO')}}</span></a>
                @else
                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbarProfile"
                    class="flex items-center justify-between w-full py-2 px-3 hover:text-[#3C55AC] md:hover:bg-transparent md:border-0 text-white md:p-0 md:w-auto">
                    {{Auth::user()->firstname}} {{Auth::user()->lastname}} | {{Auth::user()->staff ? Auth::user()->staff
                    :
                    Auth::user()->vid}}
                    <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg></button>
                <!-- Dropdown menu -->
                <div id="dropdownNavbarProfile"
                    class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownLargeButton">
                        <li>
                            <a href="{{route('dashboard')}}"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{__('Dashboard')}}</a>
                        </li>
                        <li>
                            <a href="{{route('logout')}}"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{__('Logout')}}</a>
                        </li>
                    </ul>
                </div>
                @endguest
                <div id="dropdownNavbarProfile"
                    class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownLargeButton">
                        <li>
                            <a href="{{route('dashboard')}}"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{__('Dashboard')}}</a>
                        </li>
                        <li>
                            <a href="{{route('logout')}}"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{__('Logout')}}</a>
                        </li>
                    </ul>
                </div>

                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbarLang"
                    class="flex items-center justify-between w-full py-2 px-3 hover:text-[#3C55AC] md:hover:bg-transparent md:border-0 text-white md:p-0 md:w-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" fill="currentColor" height="24"
                        viewBox="0 0 24 24">
                        <path
                            d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zM4 12c0-.899.156-1.762.431-2.569L6 11l2 2v2l2 2 1 1v1.931C7.061 19.436 4 16.072 4 12zm14.33 4.873C17.677 16.347 16.687 16 16 16v-1a2 2 0 0 0-2-2h-4v-3a2 2 0 0 0 2-2V7h1a2 2 0 0 0 2-2v-.411C17.928 5.778 20 8.65 20 12a7.947 7.947 0 0 1-1.67 4.873z">
                        </path>
                    </svg>
                    <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg></button>
                <!-- Dropdown menu -->
                <div id="dropdownNavbarLang"
                    class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownLargeButton">
                        <li>
                            <a href="{{route('locale',['locale'=> 'es'])}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600
                                dark:hover:text-white">{{__('Spanish')}}</a>
                        </li>
                        <li>
                            <a href="{{route('locale',['locale'=> 'en'])}}"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{__('English')}}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul
                class="flex flex-col p-4 md:p-0 mt-4 font-medium border bg-white md:bg-inherit border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 ">
                <li>
                    <a href="{{route('home')}}"
                        class="block py-2 px-3 hover:text-[#3C55AC]  rounded md:bg-transparent hover: md:p-0">Home</a>
                </li>
                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbarPilot"
                        class="flex items-center justify-between w-full py-2 px-3 hover:text-[#3C55AC] md:hover:bg-transparent md:border-0  md:p-0 md:w-auto">{{__('Pilot')}}
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg></button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbarPilot"
                        class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="{{route('booking.pilot')}}"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{__('Book')}}</a>
                            </li>
                            {{-- <li aria-labelledby="dropdownNavbarLink">
                                <button id="doubleDropdownButton" data-dropdown-toggle="doubleDropdown"
                                    data-dropdown-placement="right-start" type="button"
                                    class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dropdown<svg
                                        class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg></button>
                                <div id="doubleDropdown"
                                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="doubleDropdownButton">
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Overview</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">My
                                                downloads</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Billing</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Rewards</a>
                                        </li>
                                    </ul>
                                </div>
                            </li> --}}
                            <li>
                                <a href=""
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{__('Brefing')}}</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbarAtc"
                        class="flex items-center justify-between w-full py-2 px-3 hover:text-[#3C55AC] md:hover:bg-transparent md:border-0  md:p-0 md:w-auto">{{__('Atc')}}
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg></button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbarAtc"
                        class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="{{route('booking.atc')}}"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{__('Book')}}</a>
                            </li>
                            <li>
                                <a href=""
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{__('Brefing')}}</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="{{route('booking.stats')}}"
                        class="block py-2 px-3  rounded hover:text-[#3C55AC] md:hover:bg-transparent md:p-0">{{__('Statistics')}}</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


@if (Route::is('home'))
<script>
    $(window).on("scroll touchmove", function() {
        if ($(document).scrollTop() >= $("#eventDetails").position().top - 80) {
            $('#nav-home').css('background', $("#nav-home").attr("data-color"));
          $('#nav-home').addClass("py-3");
          $('#nav-home').removeClass("pt-5");
      }else{
          $('#nav-home').css('background', 'transparent');
          $('#nav-home').addClass("pt-5");
          $('#nav-home').removeClass("py-3");
        };
    });
</script>
@endif