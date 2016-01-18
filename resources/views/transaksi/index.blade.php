@extends('layouts.table')
@section('content')
    <div class="container">

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

        <div class="col-lg-6">
            <div class="card-box">
                
            <h4 class="m-t-0 header-title"><b>Detail Motor | {{ $debitur->nama }}</b></h4>          
            <div class="p-20">
                <table class="table table-striped m-0">
                    <tbody>
                        <tr>
                            <th scope="row">KTP</th>
                            <td>{{ $debitur->ktp }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Nama</th>
                            <td>{{ $debitur->nama }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Tanggal Lahir</th>
                            <td>{{ $debitur->tgl_lahir }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Jenis Kelamin</th>
                            <td>
                                @if ($debitur->jk == 'L')
                                    Laki-laki
                                @elseif ($debitur->jk == 'P')
                                    Perempuan
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Pekerjaan</th>
                            <td>{{ $debitur->pekerjaan }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Penghasilan</th>
                            <td>Rp {{ number_format($debitur->penghasilan) }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Alamat</th>
                            <td>{{ $debitur->alamat }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
@stop