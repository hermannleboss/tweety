<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <form action="{{$user->path()}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="mb-6">

            <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Name
            </label>
            <input type="text" name="name" id="name" class="border border-gray-400 p-2 w-full" value="{{$user->name}}" required>
            @error('name')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-6">

            <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Username
            </label>
            <input type="text" name="username" id="username" class="border border-gray-400 p-2 w-full" value="{{$user->username}}"  required>
            @error('username')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-6">

            <label for="avatar" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Avatar
            </label>
            <div class="flex">
                <input type="file" name="avatar" id="avatar" class="border border-gray-400 p-2 w-full" value="{{$user->avatar}}"  required>
                @error('avatar')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                @enderror
                <img 
                    src="{{$user->avatar}}" 
                    alt="alt"
                    width="40px"
                    height="auto"
                    />
            </div>

        </div>
        <div class="mb-6">

            <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Email
            </label>
            <input type="email" name="email" id="email" class="border border-gray-400 p-2 w-full"  value="{{$user->email}}"   required>
            @error('email')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-6">

            <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Password
            </label>
            <input type="password" name="password" id="password" class="border border-gray-400 p-2 w-full" required>
            @error('password')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-6">

            <label for="password_confirmation" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Password Confirmation
            </label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="border border-gray-400 p-2 w-full" required>
            @error('password_confirmation')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>


        <div class="mb-6">
            <button class="bg-blue-400 text-white rounded py-2 hover:bg-blue-500">
                Submit
            </button>
        </div>


    </form>
</x-app-layout>
