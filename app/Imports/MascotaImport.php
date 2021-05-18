<?php

namespace App\Imports;

use App\Models\Mascota;
use Maatwebsite\Excel\Concerns\ToModel;

class MascotaImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Mascota([
        'species'       => $row ['0'],
        'name'          => $row ['1'],
        'race'          => $row ['2'],
        'age'           => $row ['3'],
        'color'         => $row ['4'],
        'size'          => $row ['5'],
        ]);
    }
}
