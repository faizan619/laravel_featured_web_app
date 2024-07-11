<div class="flex justify-between items-center px-5 h-16 bg-[#82498c] text-white">
    <div class="">
        <a href="/">
            <h1 class="font-bold text-2xl font-serif cursor-grab">Features Site</h1>
        </a>
    </div>
    <div class="flex-1 pl-20">
        <ul class="flex gap-8 w-full">
            <a href="{{ route('task.index') }}" class="hover:underline text-lg ">
                <li>Task App</li>
            </a>
            <a href="{{route('booking.index')}}" class="hover:underline text-lg ">
                <li>Hotel Booking</li>
            </a>
            <a href="{{route('interview.index')}}" class="hover:underline text-lg ">
                <li>Interview Project</li>
            </a>
            <a href="{{route('pdf.index')}}" class="hover:underline text-lg ">
                <li>Image Converter</li>
            </a>
        </ul>
    </div>
    <div class="flex gap-5 pl-5">
        @if (Auth::check())
            <p class="text-lg capitalize px-5 py-1 rounded-md border cursor-not-allowed">{{Auth::user()->role}} : {{ Auth::user()->name }}</p>
            <form action="{{route('logout')}}" method="POST">
                @csrf
                @method("DELETE")
                <button class="px-5 py-2 capitalize bg-white text-red-600 rounded-md hover:scale-105 transition-all">Logout</button>
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
