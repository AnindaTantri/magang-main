<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\DetailDinasHarian;

class DinasHarianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tampil = DetailDinasHarian::get();
        return view('dashboard.dinas_harian.index',compact('tampil'));
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
        $kirim = new DetailDinasHarian;
        $kirim->nama = $request->nama;
        $kirim->tanggal = $request->tanggal;
        $kirim->jml_dinas = $request->jml_dinas;
        $kirim->jml_yangdinas = $request->jml_yangdinas;
        $kirim->nilai = $request->nilai;
        $kirim->save();
        return redirect ('/dashboard/dinas_harian');
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
        $data = DetailDinasHarian::find($id);
       
        return view('dashboard.detail_dinasharian.edit',['data'=> $data]);
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
        $data = DetailDinasHarian::find($id);
        $data->nama = $request->nama;
        $data->jml_dinas = $request->jml_dinas;
        $data->jml_yangdinas = $request->jml_yangdinas;
        $data->nilai = $request->nilai;
        $data->save();
        return redirect ('/dashboard/dinas_harian');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete=DetailDinasHarian::find($id)->delete();
        return redirect('/dashboard/dinas_harian');
    }
}
