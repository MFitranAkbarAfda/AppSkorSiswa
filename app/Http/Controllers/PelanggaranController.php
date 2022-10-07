<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelanggaran;

class PelanggaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $no = 1;
        $data_p = Pelanggaran::all();

        return view('pages.pelanggaran.index', compact('data_p', 'no'));
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
        $this->validate($request, [
            'nama_pelanggaran' => 'required',
    		'point' => 'required',
        ]);

        Pelanggaran::create([
    		'nama_pelanggaran' => $request->nama_pelanggaran,
    		'point' => $request->point,
    	]);

        return redirect('pelanggaran');
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
        $pelanggaran = Pelanggaran::find($id);
        $pelanggaran->nama_pelanggaran = $request->nama_pelanggaran;
        $pelanggaran->point = $request->point;
        $pelanggaran->save();

        return redirect('pelanggaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pelanggaran = Pelanggaran::findorFail($id);
        $pelanggaran->delete();

        return redirect('pelanggaran');
    }
}
