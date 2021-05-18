<?php

namespace App\Exports;

use App\Models\Song;
use Maatwebsite\Excel\Concerns\FromCollection;

class SongExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Song::all();
    }
}
