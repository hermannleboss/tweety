<div class="border border-blue-400 rounded-lg py-6 px-8 mb-8">
    <form action="/tweets" method="POST">
        @csrf
        <textarea
            name="body"
            id=""
            class="w-full"
            placeholder="What's up doc ?"
            required
            ></textarea>
        <hr>
        <footer class="flex justify-between ">
            <img src="{{auth()->user()->avatar}}" alt="Your avatar" class="rounded-full mr-2">
            <button 
                type="submit" 
                class="bg-blue-500 rounded-lg shadow p-2 text-white">
                Tweet-a-roo!
            </button>
        </footer>
    </form>
    @error('body')
        <p class="text-red-500 text-sm mt-2">{{$message}}</p>
    @enderror

</div>