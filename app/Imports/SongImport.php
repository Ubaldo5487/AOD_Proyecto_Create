<?php

namespace App\Imports;

use App\Models\Song;
use Maatwebsite\Excel\Concerns\ToModel;

class SongImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Song([
        'title'         => $row ['0'],
        'album'         => $row ['1'],
        'autor'         => $row ['2'],
        'genere'        => $row ['3'],
        'duration'      => $row ['4'],
        'date'          => $row ['5'],
        'available'     => $row ['6'],
        ]);
    }
}
