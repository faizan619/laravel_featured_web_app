<div class="flex justify-center">
    <div class="w-[60%]">
        <div class="text-center flex flex-col gap-3">
            <h1 class="font-bold text-2xl">Interview Project Page</h1>
            <p class="italic font-extralight text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, maxime.</p>
            <a href="{{route('interview.create')}}" class="hover:bg-[#6b3475] py-2 rounded-md bg-[#82498c] text-white">Book Room Now</a>
        </div>
        @if(session('status'))
            <p class="text-center">{{session('status')}}</p>

        @endif
        <div class="bg-gray-300 mt-5 p-5 rounded-md">
            <p>Sorry for inconvinience but the given below room are already booked. </p>
            @forelse ($data as $dd)
                <div>
                    <p>{{$dd->room_name}}</p>
                </div>
            @empty
                <p>No Room Is Currently Book. </p>
            @endforelse
        </div>
    </div>
</div>
