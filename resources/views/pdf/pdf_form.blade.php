@extends('masterlayout')

@section('title')
    PDF Converter | Featured Manager
@endsection

@section('body')
    <div class="flex justify-center items-center">
        <div class="w-[60%] shadow-md shadow-black p-5 rounded-md">
            <p class="text-center text-xl font-bold">Pdf to Excel Converter</p>
            <form action="{{route('pdf.store')}}" method="POST" enctype="multipart/form-data" class="flex flex-col gap-5 my-5">
                @csrf
                <input type="file" name="file_name" id="pdf" accept=".pdf" class="border-2 border-[#82498c] p-2 rounded-md text-[#82498c] file:bg-[#82498c] file:text-white hover:cursor-pointer border-dotted">
                @error('file_name')
                    <p>{{ $message }}</p>
                @enderror
                <button type="submit" class="bg-[#37474f] text-white py-2 rounded-md">Submit</button>
            </form>
            @if (session('status'))
                <div class="m-1 p-1 bg-red-600 rounded-md">{{ session('status') }}</div>
            @endif
        </div>
    </div>
@endsection
