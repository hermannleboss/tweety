<h3 class="font-bold text-xl mb-4" >Fiends</h3>
<ul class="space-y-5">
    @foreach(range(1,8) as $index)
        <li>
            <div class="flex items-center text-sm">
                <img src="https://i.pravatar.cc/40" alt="" class="rounded-full mr-2">
                John Doe 
            </div>
        </li>
    @endforeach
</ul>