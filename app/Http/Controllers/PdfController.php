<?php

namespace App\Http\Controllers;

use App\Models\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pdf.pdf_form');
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
        // return $request;
        // $file = $request->file('file_name');
        // dd($file);
        
        $request->validate([
            'file_name' => 'required|mimes:pdf|max:6048',
        ]);

        // $fileName = time().'.'.$request->file->extension();
        // $request->file->move(public_path('uploads'), $fileName);

        $path = $request->file('file_name')->store('pdfs1','public');
        Pdf::create([
            'file_name'=>$path,
        ]);
        return redirect()->route('pdf.index')->with('status','File Uploaded Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pdf $pdf)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pdf $pdf)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pdf $pdf)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = Pdf::find($id);
        $user->delete();

        $image_path = public_path("storage/") . $user->file_name;
        // return $image_path;
        if (file_exists($image_path)) {
            @unlink($image_path);
        } else {
            return "No File Exist";
        }

        return redirect()->route('pdf.index')->with('status', 'Image Deleted succesfully!');

    }
}
