<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div>
        @foreach($users as $user)
        <a href="{{$user->path()}}" class="flex items-center mb-5">
            <img 
                src="{{$user->avatar}}" 
                alt="{{$user->username}}" 
                width="70"
                class="mr-4"
                />
            <div>
                <h4 class="font-bold">{{ '@'. $user->username}}</h4>
            </div>
        </a>
        @endforeach
    </div>
</x-app-layout>