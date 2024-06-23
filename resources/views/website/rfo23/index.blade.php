@extends('website/rfe23/template')
@section('content')


<section class="w-full mt-16 relative bg-white">
    <div class="mx-auto lg:max-w-7xl w-full px-5 sm:px-10 md:px-12 lg:px-5 flex flex-col lg:flex-row gap-6 lg:gap-3">
        <div class="relative flex flex-col items-center text-center lg:text-left lg:py-7 xl:py-8
            lg:items-start lg:max-w-none max-w-3xl mx-auto lg:mx-0 lg:flex-1 lg:w-1/2">

            <h1 class="text-3xl leading-tight sm:text-4xl md:text-5xl xl:text-6xl
            font-bold text-gray-900"><span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-500 via-blue-500 to-red-500">RFE
                    CALI</span> {{__('the most awaited event of the year')}}
            </h1>
            <p class="mt-8 text-gray-700">
                {{__("common.airportInformation")}}
            </p>
        </div>
        <div class="flex flex-1 lg:w-1/2 lg:h-auto relative lg:max-w-none lg:mx-0 mx-auto max-w-3xl">
            <img src="{{asset('assets/img/RFO_CLO_Horizontal.png')}}" alt="Hero image"
                class="lg:absolute lg:w-full lg:h-full rounded-3xl object-cover lg:max-h-none max-h-96">
        </div>
    </div>

    <div class="mx-auto lg:max-w-7xl w-full px-5 sm:px-10 md:px-12 lg:px-5 flex flex-col lg:flex-row gap-6 lg:gap-3">
        <div class="relative flex flex-col items-center text-center lg:text-left lg:py-7 xl:py-8
            lg:items-start lg:max-w-none max-w-3xl mx-auto lg:mx-0 lg:flex-1 lg:w-1/2">

            <h1 class="text-xl leading-tight sm:text-4xl md:text-5xl xl:text-4xl
            font-bold text-gray-900">{{__('How to participate?')}} </h1>
            <p class=" mt-8 text-gray-700">
                {{__('common.howParticipate')}}<br>
                {{__('common.recomendation')}}
            </p>
        </div>
    </div>
</section>

@endsection