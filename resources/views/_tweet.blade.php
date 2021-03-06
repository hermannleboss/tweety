<div class="flex p-4 {{$loop->last? '' : 'border-b border-gray-400'}}">
    <div class="mr-2 flex-shrink-0">
        <a href="{{$tweet->user->path()}}">
            <img src="{{$tweet->user->avatar}}" alt="" class="rounded-3xl mr-2" width="50" height="50">
        </a>
    </div>
    <div>
        <h5 class="font-bold mb-4">
            <a href="{{route('profile', $tweet->user)}}">
                {{$tweet->user->name}}
            </a></h5>
        <p class="text-sm">
            {{$tweet->body}}
        </p>
        <div class="flex">
            <x-like-button :tweet='$tweet'>
                
            </x-like-button>
            <x-dislike-button :tweet='$tweet'>
                
            </x-dislike-button>

        </div>
    </div>
</div>