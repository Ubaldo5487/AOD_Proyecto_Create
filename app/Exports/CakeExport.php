<?php

namespace App\Exports;

use App\Models\Cake;
use Maatwebsite\Excel\Concerns\FromCollection;

class CakeExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Cake::all();
    }
}
