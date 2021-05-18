<?php

namespace App\Imports;

use App\Models\Cellphone;
use Maatwebsite\Excel\Concerns\ToModel;

class CellphoneImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Cellphone([
        'band'              => $row['0'],
        'model'             => $row['1'],
        'color'             => $row['2'],
        'camNumber'         => $row['3'],
        'rearCamera_px'     => $row['4'],
        'frontalCamera_px'  => $row['5'],
        'screenSize'        => $row['6'],
        'screenResolution'  => $row['7'],
        'memory'            => $row['8'],
        'ram'               => $row['9'],
        'typeOfSystem'      => $row['10'],
        'systemVersion'     => $row['11'],
        'batteryCapacity'   => $row['12'],
        'loadingspeed'      => $row['13'],
        'description'       => $row['14'],
        'comment'           => $row['15'],
        'available'         => $row['16'],
        ]);
    }
}
