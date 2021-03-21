<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <header class="mb-6 relative">
        <img src="/img/default-banner.jpg" alt="alt" class="rounded rounded-lg mb-2"/>
        <div class="flex justify-between items-center">
            <div>
                <h1 class="font-bold text-2xl mb-2">{{$user->name}}</h1>
                <p class="text-sm">Joined {{$user->created_at->diffForHumans()}}</p>
            </div>

            <img 
                src="{{$user->avatar}}" 
                alt="" 
                class="rounded-full mr-2 relative"
                style="width: 150px; margin-top: -70px">
            <div>
                <a href="" 
                   class="rounded-full border border-gray-300 p-2 mr-2 text-black text-xs"
                   >Edit profile</a>
                <a href="" 
                   class="bg-blue-500 rounded-full shadow p-2 text-white  text-xs"
                   >Follow me</a>
            </div>
        </div>
        <p class="text-center mt-2">
                Bear claw cheesecake caramels powder brownie lemon drops halvah. Donut pudding cotton candy macaroon jelly. Gingerbread pastry croissant muffin apple pie sesame snaps candy. Lollipop gummies jelly-o lollipop ice cream ice cream soufflé cake pastry.
            </p>

    </header>
    @include('_timeline', [
    'tweets'=>$user->tweets
    ])
</x-app-layout>
