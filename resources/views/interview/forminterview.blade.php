<div class="flex justify-center">
    <div class="w-[60%] flex flex-col gap-3">
        <h1 class="font-bold text-3xl text-center text-[#82498c]">Enter Form Details</h1>
        <form action="{{ route('interview.store') }}" method="POST" class="flex flex-col gap-5">
            @csrf
            <select name="room_name" id="room" class="border p-3 rounded-md w-full capitalize">
                @forelse ($result as $room)
                    <option value="{{$room}}">{{$room}}</option>
                    {{-- <option value="standard1">standard1</option>
                    <option value="standard2">standard2</option>
                    <option value="standard3">standard3</option>
                    <option value="family1">family1</option>
                    <option value="family2">family2</option>
                    <option value="luxury1">luxury1</option>
                    <option value="premium1">premium1</option> --}}
                @empty
                    <option value="">Opps! No Room Currently Available. Sorry for inconvinience</option>
                @endforelse
            </select>
            <input type="text" name="user_id" value="{{ Auth::user()->id }}" hidden>
            <button type="submit" class="px-10 py-2 bg-[#82498c] text-white rounded-md">Book</button>
        </form>
        @if (session('status'))
            <p class="text-center">{{ session('status') }}</p>
        @endif
    </div>
</div>
