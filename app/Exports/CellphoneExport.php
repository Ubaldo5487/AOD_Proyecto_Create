<?php

namespace App\Exports;

use App\Models\Cellphone;
use Maatwebsite\Excel\Concerns\FromCollection;

class CellphoneExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Cellphone::all();
    }
}
