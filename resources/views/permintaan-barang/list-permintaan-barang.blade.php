@extends('layout/template')

@section('title', 'List Permintaan Barang')


<!-- start: page -->
@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Permintaan Barang</h2>
    
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
        
                        <h2 class="panel-title">Permintaan Barang</h2>
                    </header>
                    <div class="panel-body">


                                <table class="table table-bordered table-striped mb-none" id="datatable-editable">
                                    <thead>
                                        <tr>
                                            <th>Jenis Barang</th>
                                            <th>Jumlah Barang</th>
                                            <th>Diminta Oleh</th>
                                            <th>Tanggal</th>
                                            <th>Surat Izin</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="gradeX">
                                            <td>Laptop</td>
                                            <td>1</td>
                                            <td>Dadang</td>
                                            <td>13-08-2022</td>
                                            <td><a href="/media/images/apacaracom.png" download>surat-izin.pdf</a></td>
                                            <td>Diterima</td>
                                            <td>
                                                <div class="panel-body">

                                                    <button type="button" class="mb-xs mt-xs mr-xs btn btn-success">Diterima</button>

                                                    <button type="button" class="mb-xs mt-xs mr-xs btn btn-danger">Tolak</button>
                                                </div>
                                            </td>
                                            
                                        </tr>
                                        <tr class="gradeX">
                                            <td>Laptop</td>
                                            <td>1</td>
                                            <td>Dadang</td>
                                            <td>13-08-2022</td>
                                            <td><a href="/media/images/apacaracom.png" download>surat-izin.pdf</a></td>
                                            <td>Diterima</td>
                                            <td>
                                                <div class="panel-body">

                                                    <button type="button" class="mb-xs mt-xs mr-xs btn btn-success">Diterima</button>

                                                    <button type="button" class="mb-xs mt-xs mr-xs btn btn-danger">Tolak</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td>Laptop</td>
                                            <td>1</td>
                                            <td>Dadang</td>
                                            <td>13-08-2022</td>
                                            <td><a href="/media/images/apacaracom.png" download>surat-izin.pdf</a></td>
                                            <td>Diterima</td>                    
                                            <td>
                                                <div class="panel-body">

                                                <button type="button" class="mb-xs mt-xs mr-xs btn btn-success">Diterima</button>

                                                <button type="button" class="mb-xs mt-xs mr-xs btn btn-danger">Tolak</button>

                                                </div>
                                            </td>
                                        </tr>
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
