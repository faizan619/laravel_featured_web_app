<?php

namespace App\Http\Controllers;

use App\Models\Interview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InterviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Interview::all();
        return view('interviewpage', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $total_room = ['standard1','standard2','standard3','family1','family2','luxury1','premium1'];

        // $avlb_room = Interview::select('room_name')->get();
        // $result = array_diff($total_room, $avlb_room);
        // return $result;

        $total_room = ['standard1', 'standard2', 'standard3', 'family1', 'family2', 'luxury1', 'premium1'];
        $avlb_room_collection = Interview::select('room_name')->get();
        $avlb_room = $avlb_room_collection->pluck('room_name')->toArray();
        $result = array_diff($total_room, $avlb_room);
        // return $result;

        return view('interview.dataenter',compact('result'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inpdata = $request->validate([
            'room_name' => 'required',
            'user_id' => 'required|numeric'
        ]);
        try {
            // Interview::create($inpdata);
            DB::table('interviews')->insert($inpdata);
            return redirect()->route('interview.index')->with('status', 'Your Booking is Successfully Confirmed!');
        } catch (\Throwable $th) {
            return redirect()->route('interview.create')->with('status', 'Opps! The Room [ ' . $request->room_name . ' ] is already book. please select other room.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Interview $interview)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Interview $interview)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Interview $interview)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Interview $interview)
    {
        //
    }
}
