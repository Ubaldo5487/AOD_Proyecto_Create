<?php

namespace App\Exports;

use App\Models\Mascota;
use Maatwebsite\Excel\Concerns\FromCollection;

class MascotaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Mascota::all();
    }
}
