<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rujukan;

class RujukanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['rujukan'] = Rujukan::all();
        return view('rujukan.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rujukan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rujukan = new Rujukan();
        $rujukan->nama_klinik = $request->tNamaKlinik;
        $rujukan->alamat_klinik = $request->tAlamat;
        $rujukan->save();
        return redirect()->route("rujukan");
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
        $data['rujukan'] = Rujukan::find($id);
        return view('rujukan.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rujukan = Rujukan::find($id);
        $rujukan->nama_klinik = $request->tNamaKlinik;
        $rujukan->alamat_klinik = $request->tAlamat;
        $rujukan->save();
        return redirect()->route("rujukan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rujukan = Rujukan::find($id);
        $rujukan->delete();
        return back();
    }
}
