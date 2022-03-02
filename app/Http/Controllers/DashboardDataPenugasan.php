<?php

namespace App\Http\Controllers;

use App\Models\DataPenugasan;
use Illuminate\Http\Request;

class DashboardDataPenugasan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.data_penugasan.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataPenugasan  $dataPenugasan
     * @return \Illuminate\Http\Response
     */
    public function show(DataPenugasan $dataPenugasan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataPenugasan  $dataPenugasan
     * @return \Illuminate\Http\Response
     */
    public function edit(DataPenugasan $dataPenugasan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataPenugasan  $dataPenugasan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataPenugasan $dataPenugasan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataPenugasan  $dataPenugasan
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataPenugasan $dataPenugasan)
    {
        //
    }
}
