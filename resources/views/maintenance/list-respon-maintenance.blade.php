@extends('layout/template')

@section('title', 'List Respon Maintenance')


<!-- start: page -->
@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Respon Maintenance</h2>
    
        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Forms</span></li>
                <li><span>Basic</span></li>
            </ol>
    
            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>

    <!-- start: page -->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        <div class="panel-actions">
                            <a href="#" class="fa fa-caret-down"></a>
                            <!-- <a href="#" class="fa fa-times"></a> -->
                        </div>
        
                        <h2 class="panel-title">Respon Maintenance</h2>
                    </header>
                    <div class="panel-body">


                                <table class="table table-bordered table-striped mb-none" id="">
                                    <thead>
                                        <tr>
                                            <th>Tanggal Permintaan</th>
                                            <th>Jenis Barang</th>
                                            <th>Keterangan</th>
                                            <th>Teknisi</th>
                                            <th>Jadwal Perbaikan</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                        <tr class="gradeX">
                                            <td>{{$item->tanggal_permintaan}}</td>
                                            <td>{{$item->jenis_barang}}</td>
                                            <td>{{$item->id_status_maintenance}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->jadwal_perbaikan}}</td>
                                            <td class="status">
                                                 @if ($item->status_maintenance=='Dilaporkan')
                                                        <!-- button detail -->
                                                            <button class="btn btn-warning">Belum Direspon </button>
                                                            <button class="btn btn-success">Selesai </button>
                                                @else
                                                        <button class="btn btn-success">Selesai </button>

                                                @endif
                                            </td>
                                            <td class="actions">
                                            @if ($item->status_maintenance=='Dilaporkan')
                                                        <!-- button detail -->
                                                            <button class="btn btn-warning">Belum Direspon </button>
                                                @else
                                                        <button class="btn btn-warning">Edit </button>
                                                @endif
                                                
                                            </td>
                                        </tr>
                                        @endforeach 
                                    </tbody>
                                </table>
                    </div>
                </section>
        
               
        
            </div>
        </div>
    <!-- end: page -->
</section>
				
@endsection
<!-- end: page -->
