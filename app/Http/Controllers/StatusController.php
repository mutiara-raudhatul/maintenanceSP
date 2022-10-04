<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status_maintenance;


class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $dtStatus = Status_maintenance::all();
        return view('maintenance.lihat-status', compact('dtStatus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getTambahStatus()
    {
        return view('maintenance.tambah-status');
    }

    public function createStatus(Request $request)
    {        
        Status_maintenance::create([
            'id_status_maintenance' => $request->id_status_maintenance,
            'status_maintenance' =>$request->status_maintenance,
        ]);

        return redirect('status')->with('toast_success', 'Data Berhasil Tersimpan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getUpdate()
    {
        return view('maintenance.update-status');
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
