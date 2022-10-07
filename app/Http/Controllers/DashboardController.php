<?php

namespace App\Http\Controllers;

use App\Models\Permintaan_maintenance;
use App\Models\Permintaan_barang;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $year = ['06-2022','07-2022','08-2022','09-2022'];

        $user = [];
        foreach ($year as $key => $value) {
            $user[] = Permintaan_barang::where(\DB::raw("DATE_FORMAT(tanggal_permintaan, '%m-%Y')"),$value)->count();
        }

    	return view('Dashboard.dashboard-admingudang')->with('year',json_encode($year,JSON_NUMERIC_CHECK))->with('user',json_encode($user,JSON_NUMERIC_CHECK));
    }

    public function echart(Request $request)
    {
    // 	$jenis_barang = Permintaan_barang:: join ('detail_kebutuhan', 'detail_kebutuhan.id_detail_kebutuhan', '=', 'permintaan_barang.id_detail_kebutuhan') 
    //     -> join ('jenis_barang', 'jenis_barang.id_jenis_barang', '=', 'detail_kebutuhan.id_jenis_barang') 
    //     -> where('product_type','fruit')->get();
    // 	$veg = Product::where('product_type','vegitable')->get();
    // 	$grains = Product::where('product_type','grains')->get();
    // 	$fruit_count = count($fruit);    	
    // 	$veg_count = count($veg);
    // 	$grains_count = count($grains);
    // 	return view('echart',compact('fruit_count','veg_count','grains_count'));
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
     * @param  \App\Models\Permintaan_maintenance  $permintaan_maintenance
     * @return \Illuminate\Http\Response
     */
    public function show(Permintaan_maintenance $permintaan_maintenance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Permintaan_maintenance  $permintaan_maintenance
     * @return \Illuminate\Http\Response
     */
    public function edit(Permintaan_maintenance $permintaan_maintenance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Permintaan_maintenance  $permintaan_maintenance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permintaan_maintenance $permintaan_maintenance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Permintaan_maintenance  $permintaan_maintenance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permintaan_maintenance $permintaan_maintenance)
    {
        //
    }
}
