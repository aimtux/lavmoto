@extends('layouts.table')

@section('content')
<div class="container">

    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="page-title">Datatable</h4>
            <ol class="breadcrumb">
                <li>
                    <a href="#">Lavmoto</a>
                </li>
                <li>
                    <a href="#">Tables</a>
                </li>
                <li class="active">
                    Data Debitur
                </li>
            </ol>
        </div>
    </div>

    

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
            <p> 
                <a href="{{ URL('admin/debitur/create') }}"><button class="btn btn-default waves-effect waves-light">
                    <i class="fa fa-plus"></i> <span>Tambah Data</span>
                </button></a>
            </p>
                <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>KTP</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Pekerjaan</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                        {{-- */$x=0;/* --}}
                        @foreach ($debitur as $data)
                        {{-- */$x++;/* --}}
                            <tr>
                                <td>{{ $x }}</td>
                                <td><a href="{{ url('admin/debitur/'. $data->id) }}"> {{ $data->ktp }}</a></td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->jk }}</td>
                                <td>{{ $data->pekerjaan }}</td>
                                <td>
                                    <a href="{{ URL('admin/debitur/'.$data->id) }}">
                                        <button class="btn btn-icon waves-effect waves-light btn-info" >
                                            <i class="fa fa-eye">Transaksi</i>
                                        </button>
                                    </a>
                                    
                                    <a href="{{ URL('admin/debitur/'.$data->id.'/edit') }}">
                                        <button class="btn btn-icon waves-effect waves-light btn-warning" >
                                            <i class="fa fa-pencil"> Edit</i>
                                        </button>
                                    </a>

                                    <button class="btn btn-icon waves-effect waves-light btn-danger" data-toggle="modal" data-target="#confModal">
                                        <i class="fa fa-remove"> Hapus</i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>


</div>

@if ($x >= 1)
    @include('layouts.partial.modal', ['route' => 'admin/debitur/', 'id' => $data->id])
@endif

@stop