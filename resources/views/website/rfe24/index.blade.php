<div class="flex flex-col justify-center ">
    <section class="">
        <div x-data="{
            // Sets the time between each slides in milliseconds
            autoplayIntervalTime: 5000,
            slides: [
                {
                    imgSrc: '{{asset('assets/img/events/banner_1.png')}}',
                    imgAlt: 'Banner rfo',
                    {{-- description: 'The architects of the digital world, constantly battling against their mortal enemy – browser compatibility.', --}}
                },
                {
                    imgSrc: '{{asset('assets/img/events/banner_2.png')}}',
                    imgAlt: 'Airplane in bogota',
                },
                {
                    imgSrc: '{{asset('assets/img/events/banner_3.png')}}',
                    imgAlt: 'Airplane in bogota',
                },
                {
                    imgSrc: '{{asset('assets/img/events/banner_4.png')}}',
                    imgAlt: 'Airplane in bogota',
                },
                {
                    imgSrc: '{{asset('assets/img/events/banner_5.png')}}',
                    imgAlt: 'Airplane in bogota',
                }
            ],
            currentSlideIndex: 1,
            isPaused: false,
            autoplayInterval: null,
            previous() {
                if (this.currentSlideIndex > 1) {
                    this.currentSlideIndex = this.currentSlideIndex - 1
                } else {
                    // If it's the first slide, go to the last slide
                    this.currentSlideIndex = this.slides.length
                }
            },
            next() {
                if (this.currentSlideIndex < this.slides.length) {
                    this.currentSlideIndex = this.currentSlideIndex + 1
                } else {
                    // If it's the last slide, go to the first slide
                    this.currentSlideIndex = 1
                }
            },
            autoplay() {
                this.autoplayInterval = setInterval(() => {
                    if (! this.isPaused) {
                        this.next()
                    }
                }, this.autoplayIntervalTime)
            },
            // Updates interval time
            setAutoplayInterval(newIntervalTime) {
                clearInterval(this.autoplayInterval)
                this.autoplayIntervalTime = newIntervalTime
                this.autoplay()
            },
        }" x-init="autoplay" class="relative w-full overflow-hidden">

            <!-- slides -->
            <!-- Change min-h-[50svh] to your preferred height size -->
            <div class="relative min-h-[100svh] w-full">
                <template x-for="(slide, index) in slides">
                    <div x-cloak x-show="currentSlideIndex == index + 1" class="absolute inset-0"
                        x-transition.opacity.duration.1000ms>

                        <!-- Title and description -->
                        <div
                            class="lg:px-32 lg:py-14 absolute inset-0 z-10 flex flex-col items-center justify-end gap-2 bg-gradient-to-t from-slate-900/85 to-transparent px-16 py-12 text-center">
                            <h3 class="w-full lg:w-[80%] text-balance text-2xl lg:text-3xl font-bold text-red-50"
                                x-text="slide.title" x-bind:aria-describedby="'slide' + (index + 1) + 'Description'">
                            </h3>
                            <p class="lg:w-1/2 w-full text-pretty text-sm text-slate-300" x-text="slide.description"
                                x-bind:id="'slide' + (index + 1) + 'Description'"></p>
                        </div>

                        <img class="absolute w-full h-full inset-0 object-cover text-slate-700 dark:text-slate-300"
                            x-bind:src="slide.imgSrc" x-bind:alt="slide.imgAlt" />
                    </div>
                </template>
            </div>

            <!-- Pause/Play Button -->
            <button type="button"
                class="absolute bottom-5 right-5 z-20 rounded-full text-slate-300 opacity-50 transition hover:opacity-80 focus-visible:opacity-80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600 active:outline-offset-0"
                aria-label="pause carousel"
                x-on:click="(isPaused = !isPaused), setAutoplayInterval(autoplayIntervalTime)"
                x-bind:aria-pressed="isPaused">
                <svg x-cloak x-show="isPaused" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                    fill="currentColor" aria-hidden="true" class="size-7">
                    <path fill-rule="evenodd"
                        d="M2 10a8 8 0 1 1 16 0 8 8 0 0 1-16 0Zm6.39-2.908a.75.75 0 0 1 .766.027l3.5 2.25a.75.75 0 0 1 0 1.262l-3.5 2.25A.75.75 0 0 1 8 12.25v-4.5a.75.75 0 0 1 .39-.658Z"
                        clip-rule="evenodd">
                </svg>
                <svg x-cloak x-show="!isPaused" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                    fill="currentColor" aria-hidden="true" class="size-7">
                    <path fill-rule="evenodd"
                        d="M2 10a8 8 0 1 1 16 0 8 8 0 0 1-16 0Zm5-2.25A.75.75 0 0 1 7.75 7h.5a.75.75 0 0 1 .75.75v4.5a.75.75 0 0 1-.75.75h-.5a.75.75 0 0 1-.75-.75v-4.5Zm4 0a.75.75 0 0 1 .75-.75h.5a.75.75 0 0 1 .75.75v4.5a.75.75 0 0 1-.75.75h-.5a.75.75 0 0 1-.75-.75v-4.5Z"
                        clip-rule="evenodd">
                </svg>
            </button>

            <!-- indicators -->
            <div class="absolute rounded-xl bottom-3 md:bottom-5 left-1/2 z-20 flex -translate-x-1/2 gap-4 md:gap-3 px-1.5 py-1 md:px-2"
                role="group" aria-label="slides">
                <template x-for="(slide, index) in slides">
                    <button class="size-2 cursor-pointer rounded-full transition"
                        x-on:click="(currentSlideIndex = index + 1), setAutoplayInterval(autoplayIntervalTime)"
                        x-bind:class="[currentSlideIndex === index + 1 ? 'bg-slate-300' : 'bg-slate-300/50']"
                        x-bind:aria-label="'slide ' + (index + 1)"></button>
                </template>
            </div>
        </div>
    </section>
    <section
        class="flex flex-col justify-center items-center md:h-[30svh] h-[45svh] bg-gradient-to-tl from-amber-300 via-yellow-400 to-yellow-500 text-white">
        <div class="text-5xl font-bold font-mono" id="countdonwMsg"></div>
        <div class="grid md:auto-cols-max md:grid-rows-1 grid-cols-2 grid-rows-2 grid-flow-col gap-5 text-center">
            <div class="bg-neutral rounded-box text-neutral-content flex flex-col p-2">
                <span class="countdown font-mono text-6xl">
                    <span style="--value:15;" id="countdownDays"></span>
                </span>
                days
            </div>
            <div class="bg-neutral rounded-box text-neutral-content flex flex-col p-2">
                <span class="countdown font-mono text-6xl">
                    <span style="--value:10;" id="countdownHours"></span>
                </span>
                hours
            </div>
            <div class="bg-neutral rounded-box text-neutral-content flex flex-col p-2">
                <span class="countdown font-mono text-6xl">
                    <span style="--value:24;" id="countdownMinutes"></span>
                </span>
                min
            </div>
            <div class="bg-neutral rounded-box text-neutral-content flex flex-col p-2">
                <span class="countdown font-mono text-6xl">
                    <span style="" id="countdownSeconds"></span>
                </span>
                sec
            </div>
        </div>
    </section>
    <section class="w-full mt-16 relative" id="eventDetails">
        <div
            class="mx-auto lg:max-w-7xl w-full px-5 sm:px-10 md:px-12 lg:px-5 flex flex-col lg:flex-row gap-6 lg:gap-3">
            <div class="relative flex flex-col items-center text-center lg:text-left lg:py-7 xl:py-8
            lg:items-start lg:max-w-none max-w-3xl mx-auto lg:mx-0 lg:flex-1 lg:w-1/2" data-aos="fade-up">

                <h1 class="text-3xl text-right leading-tight sm:text-4xl md:text-5xl xl:text-6xl
            font-bold text-gray-900"><span
                        class="bg-gradient-to-r from-amber-300 via-yellow-400 to-yellow-500 bg-clip-text text-transparent">RFE
                        Bogotá</span> {{__('the most awaited event of the year')}}
                </h1>
                <p class="mt-8 text-gray-700">
                    {{__("common.airportInformation")}}
                </p>
            </div>
            {{-- <div class="flex flex-1 lg:w-1/2 lg:h-auto relative lg:max-w-none lg:mx-0 mx-auto max-w-3xl">
                <div class="h-full w-full">
                    <img src="{{asset('assets/img/RFO_SQUARE.png')}}" alt="Hero image"
                        class="rounded-3xl object-cover ">
                </div>
            </div> --}}
        </div>

    </section>



    <div class="h-16"></div>
    <section class="mb-5 px-12" data-aos="fade-right">
        <div class="grid md:grid-cols-2 grid-cols-1 gap-5">
            <article
                class="group grid rounded-xl max-w-2xl grid-cols-1 md:grid-cols-8 overflow-hidden border border-slate-300 bg-slate-100 text-slate-700 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-300">
                <!-- image -->
                <div class="col-span-3 overflow-hidden">
                    <img src="{{asset('assets/img/pilot_reference.jpg')}}"
                        class="h-52 md:h-full w-full object-cover transition duration-700 ease-out group-hover:scale-105"
                        alt="a men wearing VR goggles" />
                </div>
                <!-- body -->
                <div class="flex flex-col justify-center p-6 col-span-5">
                    <small class="mb-4 font-medium">{{__('Pilot')}}</small>
                    <h3 class="text-balance text-xl font-bold text-black lg:text-2xl dark:text-red-50"
                        aria-describedby="articleDescription">{{__('I want to fly!')}}</h3>
                    <p id="articleDescription" class="my-4 max-w-lg text-pretty text-sm">
                        {{__('common.pilotDetails')}}

                    </p>
                    <a href="{{route('booking.pilot')}}"
                        class="w-fit font-medium text-blue-700 underline-offset-2 hover:underline focus:underline focus:outline-none dark:text-blue-600">
                        {{__('Book')}}
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="inline size-4"
                            stroke="currentColor" fill="currentColor" class="mx-auto mt-8 h-16 w-16 text-ivao-blue">
                            <path
                                d="M482.3 192c34.2 0 93.7 29 93.7 64c0 36-59.5 64-93.7 64l-116.6 0L265.2 495.9c-5.7 10-16.3 16.1-27.8 16.1l-56.2 0c-10.6 0-18.3-10.2-15.4-20.4l49-171.6L112 320 68.8 377.6c-3 4-7.8 6.4-12.8 6.4l-42 0c-7.8 0-14-6.3-14-14c0-1.3 .2-2.6 .5-3.9L32 256 .5 145.9c-.4-1.3-.5-2.6-.5-3.9c0-7.8 6.3-14 14-14l42 0c5 0 9.8 2.4 12.8 6.4L112 192l102.9 0-49-171.6C162.9 10.2 170.6 0 181.2 0l56.2 0c11.5 0 22.1 6.2 27.8 16.1L365.7 192l116.6 0z" />
                        </svg>
                    </a>
                </div>
            </article>


            <article
                class="group grid rounded-xl max-w-2xl grid-cols-1 md:grid-cols-8 overflow-hidden border border-slate-300 bg-slate-100 text-slate-700 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-300">
                <!-- image -->
                <div class="col-span-3 overflow-hidden">
                    <img src="{{asset('assets/img/events/tower.jpg')}}"
                        class="h-52 md:h-full w-full object-cover transition duration-700 ease-out group-hover:scale-105"
                        alt="a men wearing VR goggles" />
                </div>
                <!-- body -->
                <div class="flex flex-col justify-center p-6 col-span-5">
                    <small class="mb-4 font-medium">{{__('ATC')}}</small>
                    <h3 class="text-balance text-xl font-bold text-black lg:text-2xl dark:text-red-50"
                        aria-describedby="articleDescription">{{__('I want to control!')}}</h3>
                    <p id="articleDescription" class="my-4 max-w-lg text-pretty text-sm">
                        {{__('common.atcDetails')}}
                    </p>
                    <a href="{{route('booking.atc')}}"
                        class="w-fit font-medium text-blue-700 underline-offset-2 hover:underline focus:underline focus:outline-none dark:text-blue-600">
                        {{__('Book')}}
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" fill="currentColor">
                            <path
                                d="M80.3 44C69.8 69.9 64 98.2 64 128s5.8 58.1 16.3 84c6.6 16.4-1.3 35-17.7 41.7s-35-1.3-41.7-17.7C7.4 202.6 0 166.1 0 128S7.4 53.4 20.9 20C27.6 3.6 46.2-4.3 62.6 2.3S86.9 27.6 80.3 44zM555.1 20C568.6 53.4 576 89.9 576 128s-7.4 74.6-20.9 108c-6.6 16.4-25.3 24.3-41.7 17.7S489.1 228.4 495.7 212c10.5-25.9 16.3-54.2 16.3-84s-5.8-58.1-16.3-84C489.1 27.6 497 9 513.4 2.3s35 1.3 41.7 17.7zM352 128c0 23.7-12.9 44.4-32 55.4V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V183.4c-19.1-11.1-32-31.7-32-55.4c0-35.3 28.7-64 64-64s64 28.7 64 64zM170.6 76.8C163.8 92.4 160 109.7 160 128s3.8 35.6 10.6 51.2c7.1 16.2-.3 35.1-16.5 42.1s-35.1-.3-42.1-16.5c-10.3-23.6-16-49.6-16-76.8s5.7-53.2 16-76.8c7.1-16.2 25.9-23.6 42.1-16.5s23.6 25.9 16.5 42.1zM464 51.2c10.3 23.6 16 49.6 16 76.8s-5.7 53.2-16 76.8c-7.1 16.2-25.9 23.6-42.1 16.5s-23.6-25.9-16.5-42.1c6.8-15.6 10.6-32.9 10.6-51.2s-3.8-35.6-10.6-51.2c-7.1-16.2 .3-35.1 16.5-42.1s35.1 .3 42.1 16.5z" />
                        </svg>
                    </a>
                </div>
            </article>
        </div>
        {{--
        <div
            class="mx-auto lg:max-w-7xl w-full px-5 sm:px-10 md:px-12 lg:px-5 flex flex-col lg:flex-row gap-6 lg:gap-3">
            <div class="relative flex flex-col items-center text-center lg:text-left lg:py-7 xl:py-8
        lg:items-start lg:max-w-none max-w-3xl mx-auto lg:mx-0 lg:flex-1 lg:w-1/2">

                <h1 class="text-xl leading-tight sm:text-4xl md:text-5xl xl:text-4xl
        font-bold text-gray-900">{{__('How to participate?')}} </h1>
                <p class=" mt-8 text-gray-700">
                    {{__('common.howParticipate')}}<br>
                    {{__('common.recomendation')}}
                </p>
            </div>
        </div> --}}
    </section>

    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("30 November 2024").getTime();
        $(window).on('load', function(){
        // Update the count down every 1 second
        var x = setInterval(function () {
            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor(
                (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
            );
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            $('#countdownSeconds').css('--value', seconds);
            $('#countdownMinutes').css('--value', minutes);
            $('#countdownHours').css('--value', hours);
            $('#countdownDays').css('--value', days);


            // Display the result in the element with id="countdown"
            document.getElementById("countdonwMsg").innerHTML = "{{__("Time left")}}:";
            // If the count down is finished, write some text
            if (distance < 0) {
                clearInterval(x);
                $('#countdownSeconds').css('--value', 0);
                $('#countdownMinutes').css('--value', 0);
                $('#countdownHours').css('--value', 0);
                $('#countdownDays').css('--value', 0);
                document.getElementById("countdonwMsg").innerHTML = "{{ __("NOW!") }}";
            }
        }, 1000);
        });

    </script>

</div>