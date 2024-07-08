<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Register | Task Manager</title>
</head>

<body>
    <div class="flex flex-col min-h-screen justify-between bg-gray-200">
        <div class="flex justify-center my-auto items-center">
            <div class="w-[45%]">
                <h1 class="text-center text-3xl font-bold uppercase text-[#82498c] mb-8">User Registration </h1>
                <form action="{{ route('register.store') }}" method="POST"
                    class="flex flex-col gap-5 shadow-md shadow-[#82498c] p-5 rounded-md">
                    @csrf
                    <label for="name">
                        <p class="text-[#82498c]">User Name</p>
                        <input required value="{{ old('username') }}" type="text" name="username" id="name"
                            class="border-2 w-full p-1 @error('username') border-red-600  @enderror  hover:border-[#82498c] transition-all rounded-md"
                            placeholder="Eg: John Doe">
                        @if ($errors->any())
                            <div class="text-red-600">
                                @foreach ($errors->all() as $error)
                                    @error('username')
                                        {{ $message }}
                                    @enderror
                                @endforeach
                            </div>
                        @endif
                    </label>
                    <label for="email">
                        <p class="text-[#82498c]">User Email</p>
                        <input required value="{{ old('useremail') }}" type="email" name="useremail" id="email"
                            class="border-2 w-full p-1 @error('useremail') border-red-600  @enderror  hover:border-[#82498c] transition-all rounded-md"
                            placeholder="Eg: John@gmail.com">
                        @if ($errors->any())
                            <div class="text-red-600">
                                @foreach ($errors->all() as $error)
                                    @error('useremail')
                                        {{ $message }}
                                    @enderror
                                @endforeach
                            </div>
                        @endif
                    </label>
                    <label for="age">
                        <p class="text-[#82498c]">User Age</p>
                        <input required value="{{ old('userage') }}" type="number" min="18" max="40"
                            name="userage" id="age"
                            class="border-2 w-full p-1 @error('userage') border-red-600  @enderror  hover:border-[#82498c] transition-all rounded-md"
                            placeholder="21">
                        @if ($errors->any())
                            <div class="text-red-600">
                                @foreach ($errors->all() as $error)
                                    @error('userage')
                                        {{ $message }}
                                    @enderror
                                @endforeach
                            </div>
                        @endif
                    </label>
                    <label for="pass">
                        <p class="text-[#82498c]">Password</p>
                        <input required value="{{ old('password') }}" type="password" placeholder="Eg: my password" name="password" id="pass"
                            class="border-2 w-full p-1 @error('password') border-red-600  @enderror  hover:border-[#82498c] transition-all rounded-md">
                        @if ($errors->any())
                            <div class="text-red-600">
                                @foreach ($errors->all() as $error)
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                @endforeach
                            </div>
                        @endif
                    </label>
                    <label for="cpass">
                        <p class="text-[#82498c]">Confirmation Password</p>
                        <input required value="{{ old('password_confirmation') }}" type="password" placeholder="Eg: my password"
                            name="password_confirmation" id="cpass"
                            class="border-2 w-full p-1 @error('password_confirmation') border-red-600 @enderror  hover:border-[#82498c] transition-all rounded-md">
                        @if ($errors->any())
                            <div class="text-red-600">
                                @foreach ($errors->all() as $error)
                                    @error('password_confirmation')
                                        {{ $message }}
                                    @enderror
                                @endforeach
                            </div>
                        @endif
                    </label>
                    <div class="flex justify-between">
                        <button type="submit"
                            class="hover:bg-[#82498c] border-[#82498c] border text-[#82498c] transition-all hover:text-white px-5 py-2 rounded-md">Register</button>
                        <a href="/"><p class="hover:bg-red-600 border-red-600 border text-red-600 transition-all hover:text-white px-5 py-2 rounded-md">Back</p></a>
                    </div>
                </form>
                <p class="text-[#82498c] mt-3">Already Have a Account ? <a href="{{route('loginpage')}}">
                     <span class="hover:underline cursor-pointer text-red-600 uppercase ">Login</span></a></p>
            </div>
        </div>
        @include('component.footer')
    </div>
</body>

</html>
