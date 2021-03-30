<div class="border border-blue-400 rounded-lg py-6 px-8 mb-8 bg-white rounded-3xl  shadow-lg">
    <form action="/tweets" method="POST">
        @csrf
        <textarea
            name="body"
            id=""
            class="w-full"
            placeholder="What's up doc ?"
            required
            autofocus
            ></textarea>
        <hr>
        <footer class="flex justify-between items-center">
            <img src="{{auth()->user()->avatar}}" alt="Your avatar" class="rounded-full mr-2" width="50" height="50">
            <button 
                type="submit" 
                class="bg-blue-500 hover:bg-blue-600 rounded-lg shadow py-3 px-10 text-white rounded-3xl">
                Publish
            </button>
        </footer>
    </form>
    @error('body')
        <p class="text-red-500 text-sm mt-2">{{$message}}</p>
    @enderror

</div>