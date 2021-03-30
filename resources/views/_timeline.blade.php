
    <div class="border border-gray-300 rounded-3xl bg-white  shadow-lg">
        @forelse($tweets as $tweet)
            @include('_tweet')
            @empty
            <p class="p-4">No tweets yet</p>
        @endforelse
        <div class="p-4">
        {{$tweets->links()}}
            
        </div>
    </div>