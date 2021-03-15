<?php

namespace App\Http\Controllers;

use App\Models\Cellphone;
use Illuminate\Http\Request;

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
        $cellphone = request()->except('_token');
        Cellphone::insert($cellphone);
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
}
