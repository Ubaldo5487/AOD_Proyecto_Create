<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\MascotaExport;
use App\Imports\MascotaImport;
use Maatwebsite\Excel\Facades\Excel;

class MascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mascota1 = Mascota::all();
        return view('pets.index', compact('mascota1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mascotas = $request->except('_token');
        if($img = $request->file('image')){
            $destinationPath = 'imagenes/pets';
            $name = date('YmdHis') . "." .
            $img->getClientOriginalExtension();
            $img->move($destinationPath, $name);
            $mascotas['image'] = "$name";
        }


        
        Mascota::create($mascotas);
        return redirect()->to(url('/pets'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function show(Mascota $mascota)
    {
        return view('pets.show', compact('mascota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function edit(Mascota $mascota)
    {
        return view('pets.edit', compact('mascota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mascota $mascota)
    {
        $dataMascota = request()->except('_token');
        $mascota->update($dataMascota);
        return redirect()->to(url('/pets'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mascota $mascota)
    {
        $mascota->delete();
        return redirect()->to(url('/pets'));
    }

    public function exportpetsToCSV(Request $request)
    {
        $fileName = 'Mascota.csv';
        $pets = Mascota::all();

        $headers = array(
            "Content-type"              => "text/csv",
            "Content-Disposition"       => "attachment; fileName=$fileName",
            "Pragma"                    => "no-cache",
            "Cache-Control"             => "must-revalidate, post-check=0, pre-check=0 ",
            "Expires"                   => "0"
        );

        $columns = array(
            'Nombre', 'Especie', 'Raza', 'Edad', 'Color', 'Tamaño'
        );

        $callback = function () use ($pets, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($pets as $Mascotas) {
                $row['species']     = $Mascotas->species;
                $row['name']        = $Mascotas->name;
                $row['race']        = $Mascotas->race;
                $row['age']         = $Mascotas->age;
                $row['color']       = $Mascotas->color;
                $row['size']        = $Mascotas->size;

                fputcsv($file, array($row['species'], $row['name'], $row['race'], $row['age'], $row['color'], $row['size']));
            }
            fclose($file);
        };
        return response()->stream($callback, 200, $headers);
    }

    public function chart(){

        $mascota1 = Mascota::select(\DB::raw("COUNT(*) as count"))
        ->whereYear('created_at', date('Y'))
        ->groupBy(\DB::raw("Minute(created_at)"))
        ->pluck('count');

        $mascota2 = Mascota::select(\DB::raw("COUNT(*) as count"))
        ->whereBetween('age', ([0,10]))
        ->groupBy(\DB::raw("age"))
        ->pluck('count');

        return view('pets.chart')
        ->with('mascota1', $mascota1)
        ->with('mascota2', $mascota2);
    }

    public function cards(){
        $mascota1 = Mascota::all();
        return view('pets.cards', compact('mascota1'));
    }

    public function exportToXlsx(){
        return Excel::download(new MascotaExport, 'Mascotas.xlsx');
    }

    public function import(){
        return view ('pets.import');
    }

    public function importData(){
        Excel::import(new MascotaImport, request()->file('excel'));
        return redirect()->to(url('pets'));
    }
}