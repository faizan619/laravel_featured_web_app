<?php

namespace App\Exports;

use App\Models\Pdf;
use Maatwebsite\Excel\Concerns\FromCollection;

class YourExportClass implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pdf::all();
    }
}
