<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Siswa;
use App\Kelas;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $no = 1;
        $data = Siswa::all();
        return view('pages.siswa.index', compact('data','no'));
    }


    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::all();
        return view('pages.siswa.tambah',compact('kelas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nisn' => 'required',
    		'nama_siswa' => 'required',
            'id_kelas' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenkel' => 'required',
            'alamat' => 'required'
        ]);


        Siswa::create([
    		'nisn' => $request->nisn,
    		'nama_siswa' => $request->nama_siswa,
            'id_kelas' => $request->id_kelas,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenkel' => $request->jenkel,
            'alamat' => $request->alamat
    	]);

        return redirect('/siswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = Siswa::find($id);
        $kelas = Kelas::all();
        return view('pages.siswa.detail', compact('siswa','kelas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa = Siswa::find($id);
        $kelas = Kelas::all();
        return view('pages.siswa.edit', compact('siswa','kelas'));
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
        $this->validate($request, [
            'nisn' => 'required',
    		'nama_siswa' => 'required',
            'id_kelas' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenkel' => 'required',
            'alamat' => 'required',
            'score' => 'required|numeric'
        ]);

        $score = 100;

        $siswa = Siswa::find($id);
        $siswa->nisn = $request->nisn;
        $siswa->nama_siswa = $request->nama_siswa;
        $siswa->id_kelas = $request->id_kelas;
        $siswa->tempat_lahir = $request->tempat_lahir;
        $siswa->tanggal_lahir = $request->tanggal_lahir;
        $siswa->jenkel = $request->jenkel;
        $siswa->alamat = $request->alamat;
        $siswa->score = $score;
        $siswa->save();

        return redirect('/siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::findorFail($id);
        $siswa->delete();

        return redirect('/siswa');
    }
}
