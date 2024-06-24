<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obat;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['obat'] = Obat::all();
        return view('obat.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('obat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $obat = new Obat();
        $obat->nama_obat = $request->tNamaObat;
        $obat->harga_obat = $request->tHargaObat;
        $obat->keterangan_obat = $request->tKeterangan;
        $obat->save();
        return redirect()->route("obat");
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
        $data['obat'] = Obat::find($id);
        return view('obat.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $obat = Obat::find($id);
        $obat->nama_obat = $request->tNamaObat;
        $obat->harga_obat = $request->tHargaObat;
        $obat->keterangan_obat = $request->tKeterangan;
        $obat->update();
        return redirect()->route("obat");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $obat = Obat::find($id);
        $obat->delete();
        return back();
    }
}
