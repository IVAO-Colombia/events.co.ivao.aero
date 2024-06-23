<div class="relative overflow-x-auto">
    @if ($modal)
    @component('components.atc-confirm-booking', [
    "id" => $booking_id,
    "dependence" => $dependence,
    "start_at" => $start_at,
    "end_at" => $end_at
    ])

    @endcomponent
    @endif
    <table class="w-full text-sm text-left text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3">
                    FACILITY
                </th>
                <th scope="col" class="px-6 py-3">
                    15:00 UTC - 16:00 UTC
                </th>
                <th scope="col" class="px-6 py-3">
                    16:00 UTC - 17:00 UTC
                </th>
                <th scope="col" class="px-6 py-3">
                    17:00 UTC - 18:00 UTC
                </th>
                <th scope="col" class="px-6 py-3">
                    18:00 UTC - 19:00 UTC
                </th>
                <th scope="col" class="px-6 py-3">
                    19:00 UTC - 20:00 UTC
                </th>
                <th scope="col" class="px-6 py-3">
                    20:00 UTC - 21:00 UTC
                </th>
                <th scope="col" class="px-6 py-3">
                    21:00 UTC - 22:00 UTC
                </th>
                <th scope="col" class="px-6 py-3">
                    22:00 UTC - 23:00 UTC
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($this->facilitybooks as $key => $facility)
            <tr class="bg-white border-b">
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    {{$facility->name}}
                </td>
                @foreach ($facility->book as $item)
                <td class="text-center text-black-900 {{$item->user_id ? 'bg-red-300': 'bg-green-300'}}">
                    @if (
                    !$item->user_id
                    &&
                    Auth::user()
                    &&
                    $facility->rating <= Auth::user()->ratingatc
                        &&
                        Auth::user()->division == 'CO')
                        <x-input type="checkbox" wire:click="showConfirm({{ $item->id }})" class="form-check-input">
                        </x-input> {{__('Free')}}
                        @elseif ($facility->rating > Auth::user()->ratingatc)
                        <span>{{__('Necessary rating')}}: <br>
                            {{$this->facilitysIvao[$facility->rating]['name']}}</span>
                        @else
                        Reservado por: <br><a class="hover:text-ivao-blue"
                            href="https://www.ivao.aero/Member.aspx?ID={{ $item->user->vid }}">{{$item->user->vid}}</a>
                        @endif
                </td>
                @endforeach
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
