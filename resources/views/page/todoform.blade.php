<div class="">
    <div class="flex flex-col gap-5 items-center py-2">
        <h1 class="text-2xl font-bold text-[#82498c]">Manage Your Task</h1>
        <div class="w-[50%] border p-5 rounded-md bg-black">
            <form action="#" class="flex flex-col gap-7">
                <label for="name">
                    <p class="text-[#82498c] uppercase">Task Title</p>
                    <input type="text" name="task_title" class="w-full border p-2 rounded-md" id="name" placeholder="Eg: Completing Homework">
                </label>
                <label for="taskdesc">
                    <p class="text-[#82498c] uppercase">Task Description</p>
                    <textarea type="text" name="task_desc" class="w-full border h-32 p-2 rounded-md" id="taskdesc" placeholder="Eg: Complete the python and django project for school"></textarea>
                </label>
                <label for="tasktime">
                    <p class="text-[#82498c] uppercase">Time Needed to Complete</p>
                    <input type="time" name="task_time" id="tasktime"  class="w-full border p-2 rounded-md">
                </label>
                <button type="submit" class="text-white bg-[#82498c] py-2 rounded-md hover:bg-[#54255c] transition-all">Submit</button>
            </form>
        </div>
    </div>
</div>