<x-layout>
    <div class="justify-content-center">
        <div class="">
            <h1>Hello Locations</h1>
            <p class="text-white">{{$ip}}</p>
            @if($location)
                <p class="text-white">{{$location->cityName}}</p>
            @else
                <p class="text-white">not found </p>
            @endif

        </div>
    </div>
</x-layout>
