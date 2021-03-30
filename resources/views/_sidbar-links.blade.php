<ul class="  bg-white rounded-3xl p-4  shadow-lg">
    <li><a href="{{route('home')}}" class="font-bold text-lg mb-4 block">Acceuil</a></li>
    <li><a href="{{route('explore')}}" class="font-bold text-lg mb-4 block">Explorer</a></li>
    <li><a href="{{route('profile', auth()->user())}}" class="font-bold text-lg mb-4 block">Profile</a></li>
    <li>
        <form action="/logout" method="POST">
            @csrf
            <button class="font-bold text-lg">Se déconnecter </button>
        </form>
</ul>