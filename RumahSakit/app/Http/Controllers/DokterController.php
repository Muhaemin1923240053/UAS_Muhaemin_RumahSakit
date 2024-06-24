<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['dokter'] = Dokter::all();
        return view('dokter.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dokter.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dokter = new Dokter();
        $dokter->nama_dokter = $request->tNamaDokter;
        $dokter->spesialis_dokter = $request->tSpesialis;
        $dokter->email_dokter = $request->tEmail;
        $dokter->noTelp_dokter = $request->tNoTelp;
        $dokter->alamat_dokter = $request->tAlamat;
        $dokter->save();
        return redirect()->route("dokter");
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
        $data['dokter'] = Dokter::find($id);
        return view('dokter.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dokter = Dokter::find($id);
        $dokter->nama_dokter = $request->tNamaDokter;
        $dokter->spesialis_dokter = $request->tSpesialis;
        $dokter->email_dokter = $request->tEmail;
        $dokter->noTelp_dokter = $request->tNoTelp;
        $dokter->alamat_dokter = $request->tAlamat;
        $dokter->update();
        return redirect()->route("dokter");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dokter = Dokter::find($id);
        $dokter->delete();
        return back();
    }
}
