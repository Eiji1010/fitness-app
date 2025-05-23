<nav class="bg-white shadow">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <div class="flex items-center space-x-8">
            <span class="text-xl font-semibold text-primary">Fitness App</span>
            <a href="{{ route('dashboard') }}" class="text-gray-600 hover:text-primary">Home</a>
            <a href="/" target="_blank" class="text-gray-600 hover:text-primary">Diary</a>
            <a href="/" target="_blank" class="text-gray-600 hover:text-primary">Stats</a>
            <a href="/" target="_blank" class="text-gray-600 hover:text-primary">My Food</a>
            <a href="/" target="_blank" class="text-gray-600 hover:text-primary">Food</a>
            <a href="/" target="_blank" class="text-gray-600 hover:text-primary">Exercises</a>
        </div>
        <div class="flex items-center space-x-4">
            <span>{{ Auth::user()->name }}</span>
            <a href="{{ route('profile.edit') }}">Settings</a>
        </div>
    </div>

</nav>
