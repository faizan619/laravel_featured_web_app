<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = DB::table('todos')->get();
        return view('taskpage',compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'task_title'=>'required',
            'task_desc'=>'required',
            'task_time'=>'required',
        ]);
        
        $todo = DB::table('todos')->insert([
            'task_title'=>$request->task_title,
            'task_desc'=>$request->task_desc,
            'task_time'=>$request->task_time
        ]);
        // $todo = DB::table('todos')->insert($todos);
        if($todo){
            return redirect()->route('task.index');
        }
        else{
            return "We Are facing some server problem. will soon reslve it to make the site visible.";
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $todos = DB::table('todos')->find($id);
        // return $todos;
        return view('todo.edittodo',compact('todos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'uploaded_by' => 'required',
            'task_title' => 'required',
            'task_desc' => 'required',
            'task_time' => 'required',
        ]);
    
        $updatedData = DB::table('todos')
            ->where('id', $id)
            ->update($validatedData);
    
        if ($updatedData) {
            // return redirect()->route('task.index')->with('success', 'Task updated successfully!');
            return redirect()->route('task.index');
        } else {
            // return redirect()->back()->withErrors(['update' => 'Failed to update the task!']);
            return redirect()->back();
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('todos')->where("id",$id)->delete();
        return redirect()->route('task.index');
    }
}
