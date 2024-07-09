<div class="flex justify-center" >
    <div class="w-full p-5 rounded-md">
        <div class="flex text-center flex-col gap-3">
            <h1 class=" text-3xl font-bold">Hotel Booking System</h1>
            <p>Make your booking process much smoother than ever before.</p>
        </div>
        <div>
            <a href="{{route('booking.create')}}">
                <button class="px-5 py-2 rounded-md bg-blue-600 text-white hover:bg-blue-700">Book Now</button>
            </a>
            </div>
        <div class="mt-10">
            <p class="text-center italic text-xl font-extralight  capitalize">Here are the list of already booked rooms</p>
            <div class="flex flex-wrap gap-5 justify-evenly items-center mt-5">
                @forelse ($rooms as $room)
                    <div class="border hover:shadow-md hover:shadow-gray-400 transition-all p-5 rounded-md w-[30%] text-white flex flex-col gap-3 " style="background-image: url('assets/first_book.jpg');background-size: cover">
                        <div class="flex justify-between">
                            <p class="uppercase">{{$room->name}}</p>
                            <p class=""> {{$room->email}}</p>
                        </div>
                        <div>
                            <p class="uppercase text-xl text-center">{{$room->room_type}} Room Booked</p>
                        </div>
                        <div>
                            <p class=" px-1 backdrop-blur-sm py-2 rounded-md">Arrival at : {{$room->arrival_date}} on {{$room->arrival_time}} time</p>
                        </div>
                        <div>
                            <p class=" px-1 py-2 backdrop-blur-sm rounded-md">Departure at : {{$room->departure_date}} on {{$room->departure_time}} time</p>
                        </div>
                        <div>
                            <p class="italic font-extralight">Total guest Visit : {{$room->guest}} with <span class="underline capitalize mx-2">{{$room->pickup}}</span> facility</p>
                        </div>
                        <div class="flex gap-10">
                            <a href="{{route('booking.edit',$room->id)}}" class="flex-1 py-1 hover:scale-105 bg-blue-600 rounded-md hover:bg-blue-700 text-center">
                                <button>Update</button>
                            </a>
                            <form action="{{route('booking.destroy',$room->id)}}" method="POST" class="flex-1 py-1 hover:scale-105 bg-red-600 rounded-md hover:bg-red-700 text-center">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="">Delete</button>
                            </form>
                        </div>
                    </div>
                @empty
                    <p>No Room are Currently Booked</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
