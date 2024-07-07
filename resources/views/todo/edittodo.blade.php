@extends('masterlayout')

@section('title')
    Edit Task | Task Manager
@endsection

@section('body')
    <div>
        <div class="flex flex-col gap-5 items-center py-2">
            <h1 class="text-2xl font-bold text-[#82498c]">Edit Your <span class="underline capitalize">{{$todos->task_title}}</span> Task</h1>
            <div class="w-[50%] border p-5 rounded-md shadow-md shadow-black">
                <form action="{{ route('task.update',$todos->id) }}" method="POST" class="flex flex-col gap-7">
                    @csrf
                    @method("PUT")
                    <label for="user">
                        <p class="text-[#82498c] uppercase">Uploaded By </p>
                        <input type="text" value="{{$todos->uploaded_by}}" name="uploaded_by" class="w-full border-2 p-2 rounded-md" id="user"
                            placeholder="Eg: Completing Homework">
                    </label>
                    <label for="name">
                        <p class="text-[#82498c] uppercase">Task Title</p>
                        <input type="text" value="{{$todos->task_title}}" name="task_title" class="w-full border-2 p-2 rounded-md" id="name"
                            placeholder="Eg: Completing Homework">
                    </label>
                    <label for="taskdesc">
                        <p class="text-[#82498c] uppercase">Task Description</p>
                        <textarea type="text" name="task_desc" class="w-full border-2 h-32 p-2 rounded-md" id="taskdesc" placeholder="Eg: Complete the python and django project for school">{{$todos->task_desc}}</textarea>
                    </label>
                    <label for="tasktime">
                        <p class="text-[#82498c] uppercase">Time Needed to Complete</p>
                        <input type="time" name="task_time" value="{{$todos->task_time}}" id="tasktime" class="w-full border-2 p-2 rounded-md">
                    </label>
                    <button type="submit"
                        class="text-white bg-[#82498c] py-2 rounded-md hover:bg-[#54255c] transition-all">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
