<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\KelasMahasiswa;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class KelasMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelasMahasiswa = KelasMahasiswa::get();
        return view('kelas-mahasiswa.index', compact('kelasMahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::get();
        $mahasiswas = Mahasiswa::get();

        return view('kelas-mahasiswa.create', compact('kelas', 'mahasiswas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'mahasiswa' => 'required',
            'kelas' => 'required',
        ]);

        KelasMahasiswa::create([
            'mahasiswa_id' => $request->mahasiswa,
            'kelas_id' => $request->kelas,
        ]);

        return redirect()->route('kelas-mahasiswa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KelasMahasiswa  $kelasMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(KelasMahasiswa $kelasMahasiswa)
    {
        return view('kelas-mahasiswa.index', compact('kelasMahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KelasMahasiswa  $kelasMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(KelasMahasiswa $kelasMahasiswa)
    {
        $kelas = Kelas::get();
        $mahasiswas = Mahasiswa::get();

        return view('kelas-mahasiswa.edit', compact('kelasMahasiswa', 'kelas', 'mahasiswas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KelasMahasiswa  $kelasMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KelasMahasiswa $kelasMahasiswa)
    {
        $request->validate([
            'mahasiswa' => 'required',
            'kelas' => 'required',
        ]);

        $kelasMahasiswa->update([
            'mahasiswa_id' => $request->mahasiswa,
            'kelas_id' => $request->kelas,
        ]);

        return redirect()->route('kelas-mahasiswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KelasMahasiswa  $kelasMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(KelasMahasiswa $kelasMahasiswa)
    {
        $kelasMahasiswa->delete();

        return redirect()->route('kelas-mahasiswa.index');
    }
}
