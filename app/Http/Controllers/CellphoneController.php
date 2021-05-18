<?php

namespace App\Http\Controllers;

use App\Models\Cellphone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\CellphoneExport;
use App\Imports\CellphoneImport;
use Maatwebsite\Excel\Facades\Excel;

class CellphoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $celulares = Cellphone::all();
        return view('cellphones.index', compact('celulares'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cellphones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cellphone = $request->except('_token');
        if($img = $request->file('image')){
            $destinationPath = 'imagenes/cellphones';
            $name = date('YmdHis') . "." .
            $img->getClientOriginalExtension();
            $img->move($destinationPath, $name);
            $cellphone['image'] = "$name";
        }


        Cellphone::create($cellphone);
        return redirect()->to(url('/cellphones'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cellphone  $cellphone
     * @return \Illuminate\Http\Response
     */
    public function show(Cellphone $cellphone)
    {
        return view('cellphones.show', compact('cellphone'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cellphone  $cellphone
     * @return \Illuminate\Http\Response
     */
    public function edit(Cellphone $cellphone)
    {
        return view('cellphones.edit', compact('cellphone'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cellphone  $cellphone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cellphone $cellphone)
    {
        $dataCellphone = request()->except('_token');
        $cellphone->update($dataCellphone);
        return redirect()->to(url('/cellphones'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cellphone  $cellphone
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cellphone $cellphone)
    {
        $cellphone->delete();
        return redirect()->to(url('/cellphones'));
    }


    public function exportcellphonesToCSV(Request $request)
    {
        $fileName = 'cellphone.csv';
        $cellphones = Cellphone::all();

        $headers = array(
            "Content-type"              => "text/csv",
            "Content-Disposition"       => "attachment; fileName=$fileName",
            "Pragma"                    => "no-cache",
            "Cache-Control"             => "must-revalidate, post-check=0, pre-check=0 ",
            "Expires"                   => "0"
        );

        $columns = array(
            'Marca', 'Modelo', 'Color', 'Núm Cámaras', 'Cámara Trasera PX', 'Cámara Frontal PX', 'Tamaño De Pantalla',
            'Resolución De Pantalla', 'Capacidad Memoria', 'RAM', 'Tipo De Sistema', 'Versión De Sistema', 'Capacidad De Bateria',
            'Velocidad De Carga', 'Descripción', 'Comentario'
        );

        $callback = function () use ($cellphones, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($cellphones as $cellphone) {
                $row['brand']              = $cellphone->brand;
                $row['model']              = $cellphone->model;
                $row['color']              = $cellphone->color;
                $row['camNumber']          = $cellphone->camNumber;
                $row['rearCamera_px']      = $cellphone->rearCamera_px;
                $row['frontalCamera_px']   = $cellphone->frontalCamera_px;
                $row['screenSize']         = $cellphone->screenSize;
                $row['screenResolution']   = $cellphone->screenResolution;
                $row['memory']             = $cellphone->memory;
                $row['ram']                = $cellphone->ram;
                $row['typeOfSystem']       = $cellphone->typeOfSystem;
                $row['systemVersion']      = $cellphone->systemVersion;
                $row['batteryCapacity']    = $cellphone->batteryCapacity;
                $row['loadingspeed']       = $cellphone->loadingspeed;
                $row['description']        = $cellphone->description;
                $row['comment']            = $cellphone->comment;
                $row['available']          = $cellphone->available;

                fputcsv($file, array($row['brand'], $row['model'], $row['color'], $row['camNumber'], $row['rearCamera_px'], $row['frontalCamera_px'], $row['screenSize'], $row['screenResolution'], $row['memory'], $row['ram'], $row['typeOfSystem'], $row['systemVersion'], $row['batteryCapacity'], $row['loadingspeed'], $row['description'], $row['comment'], $row['available']));
            }
            fclose($file);
        };
        return response()->stream($callback, 200, $headers);
    }

    public function chart()
    {

        $celulares = Cellphone::select(\DB::raw("COUNT(*) as count"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(\DB::raw("Second(created_at)"))
            ->pluck('count');

        $celulares2 = Cellphone::select(\DB::raw("COUNT(*) as count"))
            ->whereBetween('camNumber', ([1, 10]))
            ->groupBy(\DB::raw("camNumber"))
            ->pluck('count');


        return view('cellphones.chart')
            ->with('celulares', $celulares)
            ->with('celulares2', $celulares2);
    }

    public function cards(){
        $celulares = Cellphone::all();
        return view('cellphones.cards', compact('celulares'));
    }

    public function exportToXlsx(){
        return Excel::download(new CellphoneExport, 'cellphones.xlsx');
    }


    public function import(){
        return view ('cellphones.import');
    }

    public function importData(Request $request){
        Excel::import(new CellphoneImport, request()->file('excel'));
        return redirect()->to(url('cellphones'));
    }
}
