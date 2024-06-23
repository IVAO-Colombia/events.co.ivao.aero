@extends('website.rfe23.template')

@section('content')
<div class="grid grid-rows-2 place-items-center h-100">

    <div class="w-4/5">
        @include('website.rfe23.widgets.statics.arr_flights')
    </div>
    <div class="w-4/5">
        @include('website.rfe23.widgets.statics.dep_flights')
    </div>
</div>

@endsection