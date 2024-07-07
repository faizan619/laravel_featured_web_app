<div class="">
    <div class="flex flex-col gap-5 items-center py-2">
        <h1 class="text-2xl font-bold text-[#82498c]">Manage Your Task</h1>
        <div class="w-[50%] border p-5 rounded-md shadow-md shadow-black">
            <form action="{{route('task.store')}}" method="POST" class="flex flex-col gap-7">
                @csrf
                <label for="name">
                    <p class="text-[#82498c] uppercase">Task Title</p>
                    <input type="text" name="task_title" class="w-full border-2 p-2 rounded-md" id="name" placeholder="Eg: Completing Homework">
                </label>
                <label for="taskdesc">
                    <p class="text-[#82498c] uppercase">Task Description</p>
                    <textarea type="text" name="task_desc" class="w-full border-2 h-32 p-2 rounded-md" id="taskdesc" placeholder="Eg: Complete the python and django project for school"></textarea>
                </label>
                <label for="tasktime">
                    <p class="text-[#82498c] uppercase">Time Needed to Complete</p>
                    <input type="time" name="task_time" id="tasktime"  class="w-full border-2 p-2 rounded-md">
                </label>
                <button type="submit" class="text-white bg-[#82498c] py-2 rounded-md hover:bg-[#54255c] transition-all">Submit</button>
            </form>
        </div>
    </div>
    <div class="flex mt-10 justify-center items-center">
        <div class="w-[50%]">
            @foreach ($users as $user)
            <div class="bg-[#37474f] flex flex-col gap-3 p-3 mb-5 rounded-md text-white">
                <p class="uppercase font-bold">{{$user->task_title}}</p>
                <p class="capitalize">{{$user->task_desc}}</p>
                <div class="flex bg-gray-600 py-3 px-1 rounded-md justify-between">
                    <p>Uploaded on : {{($user->created_at)}}</p>
                    <p>Complete within : {{($user->task_time)}}</p>
                </div>
                <div class="flex justify-between gap-10">
                    <a href="{{route('task.edit',$user->id)}}"><button class="px-5 py-2 hover:shadow-white hover:shadow-md transition-all rounded-md bg-blue-600">Update</button></a>
                    <form action="{{route('task.destroy',$user->id)}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="px-5 py-2 hover:shadow-white hover:shadow-md transition-all rounded-md bg-red-600">Delete</button>
                    </form>
                    {{-- <a href="{{route('task.destroy',$user->id)}}">
                    </a> --}}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>