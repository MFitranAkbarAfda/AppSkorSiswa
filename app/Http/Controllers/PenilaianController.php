<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penilaian;
use App\Siswa;
use App\Pelanggaran;

class PenilaianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $no = 1;
        $penilaian = Penilaian::all();
        $pelanggaran = Pelanggaran::all();
        $siswa = Siswa::all();
        return view('pages.penilaian.index', compact('penilaian','no','siswa','pelanggaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pelanggaran = Pelanggaran::all();
        $siswa = Siswa::all();
        return view('pages.penilaian.tambah', compact('siswa','pelanggaran'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_pelanggaran = $request->id_pelanggaran;
        $penilaian = Pelanggaran::where('id_pelanggaran', $id_pelanggaran)->first();

        $id_siswa = $request->id_siswa;
        $siswa = Siswa::where('id_siswa', $id_siswa)->first();

        // var_dump($siswa); die();


        Penilaian::create([
            'tanggal_penilaian' => $request->tanggal_penilaian,
            'id_siswa'          => $siswa->id_siswa,
            'id_pelanggaran'    => $request->id_pelanggaran,
            'score'             => $penilaian->point
        ]);

        $kurang = $siswa->score - $penilaian->point;

        Siswa::where('id_siswa', $id_siswa)->update([
            'score' => $kurang
        ]);

        return redirect('/penilaian');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
