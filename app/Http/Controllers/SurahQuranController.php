<?php

namespace App\Http\Controllers;

use App\Models\SurahQuran;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;

class SurahQuranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surah = SurahQuran::all();
        return view('pages.surah_quran.index', compact('surah'));
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
            'nama_surah' => 'required',
            'jumlah_ayat' => 'required',
        ]);

        SurahQuran::create([
            'nama_surah' => $request->input('nama_surah'),
            'jumlah_ayat' => $request->input('jumlah_ayat'),
        ]);
        Session::flash('message', 'Data Surah Berhasil ditambah');
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
            'nama_surah' => 'required',
            'jumlah_ayat' => 'required',
        ]);

        SurahQuran::find($id)->update([
            'nama_surah' => $request->input('nama_surah'),
            'jumlah_ayat' => $request->input('jumlah_ayat'),
        ]);
        Session::flash('message', 'Data Surah Berhasil diupdate');
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
        SurahQuran::find($id)->delete();
        Session::flash('message', 'Data Surah Berhasil dihapus');
        return back()->with('success', 'data berhasil dihapus');
    }
}
