<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\SongExport;
use App\Imports\SongImport;
use Maatwebsite\Excel\Facades\Excel;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Song::all();
        return view('songs.index', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('songs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $songs = $request->except('_token');
        if($img = $request->file('image')){
            $destinationPath = 'imagenes/songs';
            $name = date('YmdHis') . "." .
            $img->getClientOriginalExtension();
            $img->move($destinationPath, $name);
            $songs['image'] = "$name";
        }


        Song::create($songs);
        return redirect()->to(url('/songs'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function show(Song $song)
    {
        return view('songs.show', compact('song'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function edit(Song $song)
    {
        return view('songs.edit', compact('song'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Song $song)
    {
        $dataSong = request()->except('_token');
        $song->update($dataSong);
        return redirect()->to(url('/songs'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function destroy(Song $song)
    {
        $song->delete();
        return redirect()->to(url('/songs'));
    }

    public function exportsongsToCSV(Request $request)
    {
        $fileName = 'song.csv';
        $songs = Song::all();

        $headers = array(
            "Content-type"              => "text/csv",
            "Content-Disposition"       => "attachment; fileName=$fileName",
            "Pragma"                    => "no-cache",
            "Cache-Control"             => "must-revalidate, post-check=0, pre-check=0 ",
            "Expires"                   => "0"
        );

        $columns = array(
            'Nombre', 'Albúm', 'Autor', 'Género', 'Duración'
        );

        $callback = function () use ($songs, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($songs as $song) {
                $row['title']           = $song->title;
                $row['album']           = $song->album;
                $row['autor']           = $song->autor;
                $row['genere']          = $song->genere;
                $row['duration']        = $song->duration;
                $row['date']            = $song->date;
                $row['available']       = $song->available;

                fputcsv($file, array($row['title'], $row['album'], $row['autor'], $row['genere'], $row['date'], $row['available']));
            }
            fclose($file);
        };
        return response()->stream($callback, 200, $headers);
    }

    public function chart(){

        $datos = Song::select(\DB::raw("COUNT(*) as count"))
        ->whereYear('created_at', date('Y'))
        ->groupBy(\DB::raw("Second(created_at)"))
        ->pluck('count');

        $datos2 = Song::select(\DB::raw("COUNT(*) as count"))
        ->whereBetween('available', ([0,10]))
        ->groupBy(\DB::raw("available"))
        ->pluck('count');
        
        return view('songs.chart')
        ->with('datos', $datos)
        ->with('datos2', $datos2);
    }

    public function cards(){
        $datos = Song::all();
        return view('songs.cards', compact('datos'));
    }

    public function exportToXlsx(){
        return Excel::download(new SongExport, 'Songs.xlsx');
    }

    public function import(){
        return view ('songs.import');
    }

    public function importData(){
        Excel::import(new SongImport, request()->file('excel'));
        return redirect()->to(url('songs'));
    }
}
