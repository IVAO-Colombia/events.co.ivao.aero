<div class="grid grid-rows-3">
    <section
        class="flex flex-col justify-center items-center h-[25svh] bg-gradient-to-bl from-[#0D2C99] to-[#3C55AC] text-white">
        <div class="text-5xl font-bold font-mono" id="countdonwMsg"></div>
        <div class="grid auto-cols-max grid-flow-col gap-5 text-center">
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
    <div class="row-span-2 p-12 flex justify-center">
        <div class="grid grid-cols-2 justify-center items-center w-[75%]">
            @include('website.rfe24.widgets.statics.all_flights')
            @include('website.rfe24.widgets.statics.arr_flights')
            @include('website.rfe24.widgets.statics.dep_flights')
        </div>
    </div>

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
            document.getElementById("countdonwMsg").innerHTML = "{{__('Time left')}}:";
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