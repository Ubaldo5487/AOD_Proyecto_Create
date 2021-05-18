<?php

namespace App\Http\Controllers;

use App\Models\cake;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\CakeExport;
use App\Imports\CakeImport;
use Maatwebsite\Excel\Facades\Excel;

class CakeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pasteles = cake::all();
        return view('cakes.index', compact('pasteles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cakes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cakes = $request->except('_token');
        if($img = $request->file('image')){
            $destinationPath = 'imagenes/cakes';
            $name = date('YmdHis') . "." .
            $img->getClientOriginalExtension();
            $img->move($destinationPath, $name);
            $cakes['image'] = "$name";
        }

        cake::create($cakes);
        return redirect()->to(url('/cakes'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cake  $cake
     * @return \Illuminate\Http\Response
     */
    public function show(cake $cake)
    {
        return view('cakes.show', compact('cake'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cake  $cake
     * @return \Illuminate\Http\Response
     */
    public function edit(cake $cake)
    {
        return view('cakes.edit', compact('cake'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cake  $cake
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cake $cake)
    {
        $dataCake = request()->except('_token');
        $cake->update($dataCake);
        return redirect()->to(url('/cakes'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cake  $cake
     * @return \Illuminate\Http\Response
     */
    public function destroy(cake $cake)
    {
        $cake->delete();
        return redirect()->to(url('/cakes'));
    }

    public function exportcakesToCSV(Request $request)
    {
        $fileName = 'cake.csv';
        $cakes = cake::all();

        $headers = array(
            "Content-type"              => "text/csv",
            "Content-Disposition"       => "attachment; fileName=$fileName",
            "Pragma"                    => "no-cache",
            "Cache-Control"             => "must-revalidate, post-check=0, pre-check=0 ",
            "Expires"                   => "0"
        );

        $columns = array(
            'Nombre', 'Dirección', 'Ingredientes', 'Sabor', 'Cantidad', 'Tamaño', 'Descripción', 'Comentario'
        );

        $callback = function () use ($cakes, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($cakes as $cake) {
                $row['client_name']         = $cake->client_name;
                $row['client_direction']    = $cake->client_direction;
                $row['ingredient']          = $cake->ingredient;
                $row['taste']               = $cake->taste;
                $row['quantity']            = $cake->quantity;
                $row['size']                = $cake->size;
                $row['description']         = $cake->description;
                $row['comment']             = $cake->comment;
                $row['available']           = $cake->available;

                fputcsv($file, array($row['client_name'], $row['client_direction'], $row['ingredient'], $row['taste'], $row['quantity'], $row['size'], $row['description'], $row['comment'], $row['available']));
            }
            fclose($file);
        };
        return response()->stream($callback, 200, $headers);
    }

    public function chart(){

        $pasteles = Cake::select(\DB::raw("COUNT(*) as count"))
        ->whereYear('created_at', date('Y'))
        ->groupBy(\DB::raw("Minute(created_at)"))
        ->pluck('count');

        $pasteles2 = Cake::select(\DB::raw("COUNT(*) as count"))
        ->whereBetween('quantity', ([1,10]))
        ->groupBy(\DB::raw("quantity"))
        ->pluck('count');
        
        return view('cakes.chart')
        ->with('pasteles', $pasteles)
        ->with('pasteles2', $pasteles2);
    }

    public function cards(){
        $pasteles = cake::all();
        return view('cakes.cards', compact('pasteles'));
    }

    public function exportToXlsx(){
        return Excel::download(new CakeExport, 'Cakes.xlsx');
    }

    public function import(){
        return view ('cakes.import');
    }

    public function importData(){
        Excel::import(new CakeImport, request()->file('excel'));
        return redirect()->to(url('cakes'));
    }
}
