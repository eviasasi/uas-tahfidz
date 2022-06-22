<?php

namespace App\Http\Controllers;

use App\Models\JenisKelas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kelas;
use Illuminate\Support\Facades\Session;

class JenisKelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenis_kelas = JenisKelas::with('kelas')->orderBy('nama_jenis_kelas', 'ASC')->get();
        $kelas = Kelas::all();
        return view('pages.jenis_kelas.index', compact('jenis_kelas', 'kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'kelas_id' => 'required',
            'nama_jenis_kelas' => 'required',
            'keterangan' => 'required'
        ]);

        JenisKelas::create([
            'kelas_id' => $request->input('kelas_id'),
            'nama_jenis_kelas' => $request->input('nama_jenis_kelas'),
            'keterangan' => $request->input('keterangan')
        ]);
        Session::flash('message', 'Data Jenis Kelas Berhasil ditambah');
        return back()->with('success', 'data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'kelas_id' => 'required',
            'nama_jenis_kelas' => 'required',
            'keterangan' => 'required'
        ]);

        JenisKelas::find($id)->update([
            'kelas_id' => $request->input('kelas_id'),
            'nama_jenis_kelas' => $request->input('nama_jenis_kelas'),
            'keterangan' => $request->input('keterangan')
        ]);
        Session::flash('message', 'Data Jenis Kelas Berhasil diupdate');
        return back()->with('success', 'data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        JenisKelas::find($id)->delete();
        Session::flash('message', 'Data Jenis Kelas Berhasil dihapus');
        return back()->with('success', 'data berhasil dihapus');
    }
}
