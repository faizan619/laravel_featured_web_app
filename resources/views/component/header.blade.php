<div class="flex justify-between items-center px-5 h-16 bg-[#82498c] text-white">
    <div class="flex-1">
        <a href="/">
            <h1 class="font-bold text-2xl font-serif cursor-grab">Features Site</h1>
        </a>
    </div>
    <div class="flex-1">
        <ul class="flex gap-8 ">
            <a href="{{ route('task.index') }}" class="hover:underline text-xl ">
                <li>Task App</li>
            </a>
            <a href="#" class="hover:underline text-xl ">
                <li>Create</li>
            </a>
            <a href="#" class="hover:underline text-xl ">
                <li>Feedback</li>
            </a>
        </ul>
    </div>
    <div class="flex gap-5 pl-5">
        @if (Auth::check())
            <p class="text-xl capitalize px-5 py-1 rounded-md border cursor-not-allowed">{{Auth::user()->role}} : {{ Auth::user()->name }}</p>
            <form action="{{route('logout')}}" method="POST">
                @csrf
                @method("DELETE")
                <button class="px-5 py-2 uppercase bg-white text-red-600 rounded-md hover:scale-105 transition-all">Logout</button>
            </form>
        @else
            <a href="{{ route('loginpage') }}">
                <button class="px-5 py-1 bg-white text-[#82498c] rounded-md hover:scale-105 transition-all">Login</button>
            </a>
            <a href="{{ route('registerpage') }}">
                <button class="px-5 py-1 bg-white text-[#82498c] rounded-md hover:scale-105 transition-all">Register</button>
            </a>
        @endif
    </div>
</div>
