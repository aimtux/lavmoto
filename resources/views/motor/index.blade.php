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
                    Data Motor
                </li>
            </ol>
        </div>
    </div>

    

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
            <p> 
                <a href="{{ URL('admin/motor/create') }}"><button class="btn btn-default waves-effect waves-light">
                    <i class="fa fa-plus"></i> <span>Tambah Data</span>
                </button></a>
            </p>
                <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode</th>
                                <th>Tahun</th>
                                <th>Merk</th>
                                <th>Warna</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                        {{-- */$x=0;/* --}}
                        @foreach ($motor as $data)
                        {{-- */$x++;/* --}}
                            <tr>
                                <td>{{ $x }}</td>
                                <td><a href="{{ url('admin/motor/'. $data->id) }}"> {{ $data->kode }}</a></td>
                                <td>{{ $data->tahun }}</td>
                                <td>{{ $data->merk }}</td>
                                <td>{{ $data->warna }}</td>
                                <td>
                                    <a href="{{ URL('admin/motor/'.$data->id) }}">
                                        <button class="btn btn-icon waves-effect waves-light btn-info" >
                                            <i class="fa fa-eye"></i>
                                        </button>
                                    </a>
                                    
                                    <a href="{{ URL('admin/motor/'.$data->id.'/edit') }}">
                                        <button class="btn btn-icon waves-effect waves-light btn-warning" >
                                            <i class="fa fa-pencil"></i>
                                        </button>
                                    </a>

                                    <button class="btn btn-icon waves-effect waves-light btn-danger" data-toggle="modal" data-target="#confModal">
                                        <i class="fa fa-remove"></i>
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
    @include('layouts.partial.modal', ['route' => 'admin/motor/', 'id' => $data->id])
@endif 
@stop