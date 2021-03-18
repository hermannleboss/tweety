<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <section class="px-12">
        <main class="container max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="lg:flex lg:justify-between pt-8">
                <div class="lg:w-1/6">
                    @include('_sidbar-links')
                </div>
                <div class="lg:flex-1 lg:mx-10" style="max-width: 700px">
                    @include('_publish-tweet-panel')

                    <div class="border border-gray-300 rounded-lg">
                        @foreach($tweets as $tweet)
                            @include('_tweet')
                        @endforeach
                    </div>
                </div>
                <div class="lg:w-1/6 bg-blue-100 rounded-lg p-4">
                    @include('_friends-list')
                </div>
            </div>
        </main>
    </section>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
