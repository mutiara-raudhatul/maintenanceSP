@extends('layout/template')

@section('title', 'Check Maintenance')


<!-- start: page -->
@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Check Maintenance</h2>
    
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
        
                        <h2 class="panel-title">Check Maintenance</h2>
                    </header>
                    <div class="panel-body">



                        <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mb-md">
                                            <a href="/tambah-check">
                                            <button id="addToTable" class="btn btn-primary">Add <i class="fa fa-plus"></i></button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-bordered table-striped mb-none" id="datatable-editable">
                                    <thead>
                                        <tr>
                                            <th>ID Check</th>
                                            <th>Check</th>
                                            <th>Jenis Check</th>
                                            <th>Jenis Barang</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dtCheck as $item)
                                        <tr class="gradeX">
                                            <td>{{$item->id_check}}</td>
                                            <td>{{$item->check}}</td>
                                            <td>{{$item->jenis_check}}</td>
                                            <td>{{$item->jenis_barang}}</td>
                                            <td class="actions">
                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                                <a href="/update-check" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                                <a href="{{url('delete-check',$item->id_check)}}" class="on-default remove-row"onclick="return confirm('Apakah Yakin Hapus Data Ini?')"" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
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
