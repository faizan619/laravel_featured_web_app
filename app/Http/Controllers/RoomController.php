<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Room::get();
        if(Auth::check()){
            return view('booking.viewbook',compact('rooms'));
        }else{
            return redirect()->route('loginpage');
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(Auth::check()){
            return view('bookingpage');
        }
        else{
            return redirect()->route('loginpage');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated_room = $request->validate([
            'name'=>"required",
            'email'=>'required|email',
            'room_type'=>'required',
            'guest'=>'required|numeric',
            'arrival_date'=>'required',
            'arrival_time'=>'required',
            'departure_date'=>'required',
            'departure_time'=>'required',
            'pickup'=>'required',
            'sp_req'=>'nullable'
        ]);
        // return $validated_room;
        if($validated_room){
            // return $request;
            $rooms = Room::create($validated_room);
            if($rooms){
                return redirect()->route('booking.index');
            }
            else{
                return "Failed to Book the room";
            }
        }
        else{
            return "Enter Valid Data";
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Room::where('id',$id)->get();
        return view('booking.editbook',compact('data'));
        // return $data;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated_room = $request->validate([
            'name'=>"required",
            'email'=>'required|email',
            'room_type'=>'required',
            'guest'=>'required|numeric',
            'arrival_date'=>'required',
            'arrival_time'=>'required',
            'departure_date'=>'required',
            'departure_time'=>'required',
            'pickup'=>'required',
            'sp_req'=>'nullable'
        ]);

        $updateroom = DB::table('rooms')->where('id',$id);
        $confirm = $updateroom->update($validated_room);
        if($confirm){
            return redirect()->route('booking.index');
        }
        else{
            return "Failed to Update Data.";
        }


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $room = Room::find($id);
        $room->delete();
        return redirect()->route('booking.index');
    }
}
