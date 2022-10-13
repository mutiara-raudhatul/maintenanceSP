<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Permintaan_maintenance;
use App\Models\Permintaan_barang;
use App\Models\Jenis_barang;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function dashAT()
    {
        //jumlahhh
        $jumjenisbarang = Jenis_barang::count();
        $jumperminbarang = Permintaan_barang::count();
        $jumperminmaintenance = Permintaan_maintenance::count();

    	return view('Dashboard.dashboard-adminteknisi', compact('jumjenisbarang', 'jumperminbarang', 'jumperminmaintenance'));
    }

    public function dashK()
    {
        //jumlahhh
        $jumjenisbarang = Jenis_barang::count();
 
        $jumperminbarang = Permintaan_barang:: join ('users','permintaan_barang.id_user','=','users.id') 
        -> where('permintaan_barang.id_user','=','2')
        -> count();

        $jumperminmaintenance = Permintaan_maintenance::join ('users','permintaan_maintenance.id_user','=','users.id') 
        -> where('permintaan_maintenance.id_user','=','2')
        -> count();

        //chart


    	return view('Dashboard.dashboard-karyawan', compact('jumjenisbarang', 'jumperminbarang', 'jumperminmaintenance'));
    }

    public function index()
    {
        //jumlahhh
        $jumjenisbarang = Jenis_barang::count();
        $jumperminbarang = Permintaan_barang::count();
        $jumperminmaintenance = Permintaan_maintenance::count();

        //Jumlah permintaan barang
        // $tot_permintaan_barang = Permintaan_barang::where(\DB::raw("DATE_FORMAT(tanggal_permintaan, '%Y')"),$value)->count();


        // $year = ['06-2022','07-2022','08-2022','09-2022'];

        //menyiapkan data untuk chart

        $permintaan_maintenance = [];
        foreach ($permintaan_maintenance as $key => $value) {
            $permintaan_maintenance[] = Permintaan_maintenance::where(\DB::raw("DATE_FORMAT(tanggal_permintaan, '%Y')"),$value)->count();
        }

        $permintaan_barang = [];
        foreach ($permintaan_barang as $key => $value) {
            $permintaan_barang[] = Permintaan_barang::where(\DB::raw("DATE_FORMAT(tanggal_permintaan, '%Y')"),$value)->count();
        }

        $tahun= Permintaan_barang :: select (DB::raw("(DATE_FORMAT(tanggal_permintaan, '%Y')) as byear"))
        -> orderBy('byear', 'desc')
        -> distinct()
        -> get();

        $categories=[];
        foreach($tahun as $by){
            $categories[]=$by->byear;
        }

        $tt= Permintaan_barang :: select (DB::raw("(DATE_FORMAT(tanggal_permintaan, '%Y')) as byear"))
        -> orderBy('byear', 'desc')
        -> distinct()
        -> get();

        $pb = [];
        foreach ($tt as $key => $value) {
            $pb[] = Permintaan_barang::where(\DB::raw("DATE_FORMAT(tanggal_permintaan, '%Y')"),$value)->count();
        }

        $pm = [];
        foreach ($tt as $key => $value) {
            $pm[] = Permintaan_maintenance::where(\DB::raw("DATE_FORMAT(tanggal_permintaan, '%Y')"),$value)->count();
        }

        // $user = [];
        // foreach ($year as $key => $value) {
        //     $user[] = Permintaan_barang::where(\DB::raw("DATE_FORMAT(tanggal_permintaan, '%m-%Y')"),$value)->count();
        // }
        // return view('Dashboard.dashboard-admingudang',['$tahun'=>$tahun])->with('year',json_encode($year,JSON_NUMERIC_CHECK))->with('user',json_encode($user,JSON_NUMERIC_CHECK));

    	return view('Dashboard.dashboard-admingudang', compact('jumjenisbarang', 'jumperminbarang', 'jumperminmaintenance'), ['categories'=>$categories], ['permintaan_barang'=>$permintaan_barang], ['permintaan_maintenance',$permintaan_maintenance])
        ->with('pb',json_encode($pb,JSON_NUMERIC_CHECK))
        ->with('pm',json_encode($pm,JSON_NUMERIC_CHECK));
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
}