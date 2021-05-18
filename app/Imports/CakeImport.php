<?php

namespace App\Imports;

use App\Models\Cake;
use Maatwebsite\Excel\Concerns\ToModel;

class CakeImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Cake([
        'description'           => $row ['0'],
        'client_name'           => $row ['1'],
        'client_direction'      => $row ['2'],
        'ingredient'            => $row ['3'],
        'taste'                 => $row ['4'],
        'quantity'              => $row ['5'],
        'size'                  => $row ['6'],
        'description'           => $row ['7'],
        'comment'               => $row ['8'],
        'available'             => $row ['9'],
        ]);
    }
}
