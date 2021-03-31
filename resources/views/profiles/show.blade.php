<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <header class="mb-6 relative">
        <img src="/img/default-banner.jpg" alt="alt" class="rounded rounded-lg mb-2"/>
        <div class="flex justify-between items-center">
            <div style="max-width: 270px">
                <h1 class="font-bold text-2xl mb-2">{{$user->name}}</h1>
                <p class="text-sm">Joined {{$user->created_at->diffForHumans()}}</p>
            </div>

            <img 
                src="{{$user->avatar}}" 
                alt="" 
                class="rounded-full mr-2 relative border border-white border-2"
                style="width: 150px; margin-top: -70px; border-width: 4px">
            <div class="flex">

                @can('edit', $user)
                <a href="{{$user->path('edit')}}" 
                   class="rounded-full border border-gray-300 p-2 mr-2 text-black text-xs"
                   >Edit profile</a>
                @endcan

                @if(auth()->user()->isNot($user))

                <form action="{{route('follow', $user->username)}}" method="POST">
                    @csrf
                    <button type="submit"
                            class="bg-blue-500 rounded-full shadow p-2 text-white  text-xs"
                            >
                        {{auth()->user()->following($user) ? 'Unfollow Me': 'Follow me'}}
                    </button>
                </form>
                @endif
            </div>
        </div>
        <p class="text-center mt-2">
            Bear claw cheesecake caramels powder brownie lemon drops halvah. Donut pudding cotton candy macaroon jelly. Gingerbread pastry croissant muffin apple pie sesame snaps candy. Lollipop gummies jelly-o lollipop ice cream ice cream soufflé cake pastry.
        </p>

    </header>
    @include('_timeline', [
        'tweets'=>$tweets
    ])
</x-app-layout>
