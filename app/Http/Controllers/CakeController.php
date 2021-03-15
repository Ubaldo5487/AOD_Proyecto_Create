<?php

namespace App\Http\Controllers;

use App\Models\cake;
use Illuminate\Http\Request;

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
        $cakes = request()->except('_token');
        cake::insert($cakes);
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
}
