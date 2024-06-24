<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['pasien'] = Pasien::all();
        return view('pasien.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pasien.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pasien = new Pasien();
        $pasien->nama_pasien = $request->tNamaPasien;
        $pasien->jk_pasien = $request->tJenisKelamin;
        $pasien->email_pasien = $request->tEmail;
        $pasien->noTelp_pasien = $request->tNoTelp;
        $pasien->alamat_pasien = $request->tAlamat;
        $pasien->save();
        return redirect()->route("pasien");
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
        $data['pasien'] = Pasien::find($id);
        return view('pasien.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pasien = Pasien::find($id);
        $pasien->nama_pasien = $request->tNamaPasien;
        $pasien->jk_pasien = $request->tJenisKelamin;
        $pasien->email_pasien = $request->tEmail;
        $pasien->noTelp_pasien = $request->tNoTelp;
        $pasien->alamat_pasien = $request->tAlamat;
        $pasien->save();
        return redirect()->route("pasien");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pasien = Pasien::find($id);
        $pasien->delete();
        return back();
    }

    public function cetakpasien(){
        $data['pasien'] = Pasien::all();
        return view('pasien.cetakpasien', $data);
    }
}
