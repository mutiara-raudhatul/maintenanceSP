<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Jenis_barang;
use App\Models\Model_barang;
use App\Models\Status_barang;
use App\Models\User;
use App\Models\Users;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getData()
    {
        $lihat = DB::table('barang')
        ->join('model_barang', 'barang.id_model_barang', '=', 'model_barang.id_model_barang')
        ->join('status_barang', 'barang.id_status_barang', 'status_barang.id_status_barang')
        ->get([
            'barang.id_barang', 'barang.id_serial_number', 'barang.asset_tag', 'barang.hostname', 'status_barang.status_barang' 
        ]);

        return view('gudang.lihat', ['lihat' => $lihat]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getDataBarang(Request $model_barang)
    {
        $jenis_barang = DB::table('barang')
        ->join('model_barang', 'barang.id_model_barang', '=', 'model_barang.id_model_barang')
        ->join('jenis_barang', 'model_barang.id_jenis_barang', '=', 'jenis_barang.id_jenis_barang')
        ->get([
            'jenis_barang.jenis_barang', 'jenis_barang.kode_barang'
        ]);

        // $jenis_barang = DB::table('jenis_barang')
        // ->get([
        //     'jenis_barang.jenis_barang', 'jenis_barang.kode_barang'
        // ]);

        $data_barang = DB::table('barang')
        ->join('model_barang', 'barang.id_model_barang', '=', 'model_barang.id_model_barang')
        ->join('status_barang', 'barang.id_status_barang', 'status_barang.id_status_barang')
        ->where('model_barang.model_barang', '=', $model_barang)
        ->get([
            'model_barang.model_barang', 'barang.id_barang', 'barang.id_serial_number', 'barang.asset_tag', 'barang.hostname', 'status_barang.status_barang' 
        ]);

        $detail_barang = DB::table('barang')
        ->join('status_barang', 'barang.id_status_barang', 'status_barang.id_status_barang')
        ->get([
            'barang.id_barang', 'barang.id_serial_number', 'barang.asset_tag', 'barang.hostname', 'status_barang.status_barang'
        ]);

        $count_jenisbarang = DB::table('barang')
        ->join('model_barang', 'barang.id_model_barang', 'model_barang.id_model_barang')
        ->join('jenis_barang', 'model_barang.id_jenis_barang', 'jenis_barang.id_jenis_barang')
        ->get([
            'barang.id_barang', 'jenis_barang.jenis_barang'
        ]);

        $count_model = DB::table('barang')
        ->join('model_barang', 'barang.id_model_barang', 'model_barang.id_model_barang')
        ->join('jenis_barang', 'model_barang.id_jenis_barang', 'jenis_barang.id_jenis_barang')
        ->get([
            'model_barang.model_barang', 'model_barang.id_jenis_barang'
        ]);

        // return view('gudang.coba-data-barang');
        // return view('gudang.coba-data-barang', compact('jenis_barang', 'data_barang', 'detail_barang', 'count_jenisbarang', 'count_model'));
        return view('gudang.detail-barang', ['jenis_barang' => $jenis_barang, 'data_barang'=>$data_barang, 'detail_barang'=>$detail_barang, 'count_jenisbarang'=>$count_jenisbarang, 'count_model'=>$count_model]);
    }
    
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gudang.barang-masuk');
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
