<div class="bg-white rounded-3xl p-4  shadow-lg">
    
<h3 class="font-bold text-xl mb-4" >Following</h3>
<ul class="space-y-5">
    @forelse(auth()->user()->follows as $user)
        <li>
            <div>
                <a href="{{$user->path()}}" class="flex items-center text-sm">
                    <img src="{{$user->avatar}}" alt="" class="rounded-full mr-2" width="50" height="50">
                    {{$user->name}}
                </a>
            </div>
        </li>
    @empty
    <li>no friends</li>
    @endforelse
</ul>
</div>