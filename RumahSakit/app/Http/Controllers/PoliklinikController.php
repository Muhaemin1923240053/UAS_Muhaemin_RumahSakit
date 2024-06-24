<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poliklinik;

class PoliklinikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['poliklinik'] = Poliklinik::all();
        return view('poliklinik.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('poliklinik.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $poliklinik = new Poliklinik();
        $poliklinik->nama_poliklinik = $request->tNamaPoli;
        $poliklinik->gedung = $request->tGedung;
        $poliklinik->save();
        return redirect()->route("poliklinik");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['poliklinik'] = Poliklinik::find($id);
        return view('poliklinik.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $poliklinik = Poliklinik::find($id);
        $poliklinik->nama_poliklinik = $request->tNamaPoli;
        $poliklinik->gedung = $request->tGedung;
        $poliklinik->update();
        return redirect()->route("poliklinik");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $poliklinik = Poliklinik::find($id);
        $poliklinik->delete();
        return back();
    }
}
