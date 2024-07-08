<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login | Task Manager</title>
</head>
<body>
    <div class="flex flex-col min-h-screen justify-between bg-gray-200">
        <div class="flex justify-center my-auto items-center">
            <div class="w-[45%]">
                <h1 class="text-center text-3xl font-bold uppercase text-[#82498c] mb-8">User Login </h1>
                <form action="{{route('login.save')}}" method="POST" class="flex flex-col gap-5 shadow-md shadow-[#82498c] p-5 rounded-md">
                    @csrf
                    
                    <label for="email">
                        <p class="text-[#82498c]">User Email</p>
                        <input required value="{{old('email')}}" type="email" name="email" id="email" class="border-2 w-full p-1 @error('email') border-red-600  @enderror  hover:border-[#82498c] transition-all rounded-md"  placeholder="Eg: John@gmail.com">
                        @if ($errors->any())
                            <div class="text-red-600">
                                @foreach ($errors->all() as $error)
                                    @error('email')
                                        {{$message}}
                                    @enderror
                                @endforeach
                            </div>
                        @endif
                    </label>
                    
                    <label for="pass">
                        <p class="text-[#82498c]">Password</p>
                        <input required value="{{old('password')}}" type="password" name="password" id="pass" class="border-2 w-full p-1 @error('password') border-red-600  @enderror  hover:border-[#82498c] transition-all rounded-md" >
                        @if ($errors->any())
                            <div class="text-red-600">
                                @foreach ($errors->all() as $error)
                                    @error('password')
                                        {{$message}}
                                    @enderror
                                @endforeach
                            </div>
                        @endif
                    </label>
                    <div class="flex justify-between">
                        <button type="submit" class="hover:bg-[#82498c] border-[#82498c] border px-5 text-[#82498c] transition-all hover:text-white py-1 rounded-md">Login</button>
                        <a href="/"><p class="hover:bg-red-600 border-red-600 border text-red-600 transition-all hover:text-white px-5 py-2 rounded-md">Back</p></a>
                    </div>
                </form>

                <p class="text-[#82498c] mt-3">Don't have a Account ? <a href="{{route('registerpage')}}">
                    <span class="hover:underline cursor-pointer text-red-600 uppercase ">Register</span></a></p>
            </div>
        </div>
        @include('component.footer')
    </div>
</body>
</html>