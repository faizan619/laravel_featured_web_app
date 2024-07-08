<div class="flex justify-center  min-h-screen">
    <div class="w-full">
        {{-- <div class="flex justify-center h-60 items-end p-2 gap-10" style="background-image: url('assets/main_back.jpg');background-size: cover"> --}}
        <div class="flex justify-center h-60 items-end p-2 gap-10 bg-gray-500">
            {{-- <div class="h-24 border-4 rounded-md w-24" style="background-image: url('assets/first_book.jpg');background-size: cover"></div> --}}
            <div class="h-24 border-4 rounded-md w-24 bg-gray-500"></div>
            {{-- <div class="h-24 border-4 rounded-md w-24" style="background-image: url('assets/second_book.jpg');background-size: cover"></div> --}}
            <div class="h-24 border-4 rounded-md w-24 bg-gray-500"></div>
            {{-- <div class="h-24 border-4 rounded-md w-24" style="background-image: url('assets/third_book.jpg');background-size: cover"></div> --}}
            <div class="h-24 border-4 rounded-md w-24 bg-gray-500"></div>
        </div>
        <div class="flex flex-col gap-3 my-7">
            <h1 class="text-center font-bold text-4xl text-[#37474f]">Hotel Booking Form</h1>
            <p class="text-center">Experience Something new Every Moment</p>
        </div>
        <form action="{{route('booking.store')}}" method="POST" class="flex flex-col gap-5 items-center justify-center py-10 bg-gray-200">
            @csrf
            <div class="flex gap-7 w-[60%]">
                <label for="fname" class="flex flex-col gap-2 w-full">
                    <p class="text-xl">Name</p>
                    <div class="flex gap-5">
                        <input type="text" name="name" id="fname" value="{{Auth::check()?Auth::user()->name:''}}" placeholder="Eg: John Doe"
                            class="border-2 w-full hover:border-[#82498c] transition-all p-2 rounded-md" >
                    </div>
                </label>
                <label for="email" class="flex flex-col gap-2 w-full">
                    <p class="text-xl">E-mail </p>
                    <input type="email" name="email" id="email" value="{{Auth::check()?Auth::user()->email:''}}" placeholder="Eg: JohnDoe@gmail.com"
                        class="border-2 w-full p-2 hover:border-[#82498c] transition-all rounded-md"  >
                </label>
            </div>
            <div class="w-[60%] flex gap-7">
                <label for="type" class="flex flex-col gap-2 w-full">
                    <p class="text-xl">Room Type</p>
                    <select name="room_type" id="type" class="p-2 hover:border-[#82498c] transition-all bg-white border-2 rounded-md" required>
                        <option value="" hidden>Please Select</option>
                        <option value="standard">Standard Room(1 to 2 person)</option>
                        <option value="family">Family Room(4 to 8 person)</option>
                        <option value="private">Private Room(1 to 3 person)</option>
                        <option value="female_dorm">Female Dorm Room(6 to 10 female)</option>
                        <option value="male_dorm">Male Dorm Room(6 to 10 male)</option>
                    </select>
                </label>
                <label for="guest" class="flex flex-col gap-2 w-full">
                    <p class="text-xl">No. of Guest</p>
                    <input type="number" name="guest" id="quest" class="border-2 hover:border-[#82498c] transition-all w-full p-2 rounded-md"
                        placeholder="Eg: 23" required>
                </label>
            </div>
            <div class="w-[60%]">
                <label for="Adate" class="flex flex-col gap-2 w-full">
                    <p class="text-xl">Arrival Date & Time</p>
                    <div class="flex gap-5">
                        <input type="date" name="arrival_date" id="Adate" class="flex-1 hover:border-[#82498c] transition-all border-2 p-2 rounded-md" required>
                        <input type="time" name="arrival_time" id="Atime" class="flex-1 hover:border-[#82498c] transition-all border-2 p-2 rounded-md" required>
                    </div>
                </label>
            </div>
            <div class="w-[60%]">
                <label for="Ddate" class="flex flex-col gap-2 w-full">
                    <p class="text-xl">Departure Date & Time</p>
                    <div class="flex gap-5">
                        <input type="date" name="departure_date" id="Ddate" class="flex-1 hover:border-[#82498c] transition-all border-2 p-2 rounded-md" required>
                        <input type="time" name="departure_time" id="Dtime" class="flex-1 hover:border-[#82498c] transition-all border-2 p-2 rounded-md" required>
                    </div>
                </label>
            </div>
            <div class="w-[60%]">
                <label for="pickup_y" class="flex flex-col gap-2 w-full">
                    <p class="text-xl">Free Pickup?</p>
                    <div class="flex justify-between">
                        <div class="flex gap-3">
                            <input type="radio" name="pickup" id="pickup_y" value="yes pickup" required>
                            <p>Yes Please! - Pick Me on arrival </p>
                        </div>
                        <div class="flex gap-3">
                            <input type="radio" name="pickup" id="pickup_n" value="no pickup" required>
                            <p>No Thanks! - I will make my own way there.</p>
                        </div>
                    </div>
                </label>
            </div>
            <div class="w-[60%]">
                <label for="special_request" class="flex flex-col gap-2 w-full">
                    <p class="text-xl">Special Request (if any)</p>
                    <textarea name="sp_req" id="special_request" rows="7" class="border-2 hover:border-[#82498c] transition-all"></textarea>
                </label>
            </div>
            <button type="submit" class="px-5 py-2 w-[20%] rounded-md hover:bg-green-700 transition-all bg-green-600 text-white">Submit</button>
        </form>
    </div>
</div>
