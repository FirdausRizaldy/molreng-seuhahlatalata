@extends('layouts/main_layout')

@section('page_title', 'Home')


@section('page_header', 'welcome')
@section('page_description', 'Selamat Datang!')


@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Dashboard</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Customer</h3>
        </div>
        <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Customer</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Kelurahan</th>
                        <th>Foto</th>
                    </tr>
                    {{--
                </thead>
                @foreach($customer as $data)
                <tr>
                    <td>{{ $loop -> iteration }}</td>
                    <td>{{ $data -> id_customer }}</td>
                    <td>{{ $data -> nama }}</td>
                    <td>{{ $data -> alamat }}</td>
                    <td>{{ $data -> nama_kelurahan }}</td>
                    @if($data->foto == null)
                    <td><img src="{{ asset('/storage/'.$data->file_path) }}" alt=""></td>
                    @else
                    <td><img src="{{ $data->foto }}" alt=""></td>
                    @endif
                </tr>
                @endforeach --}}
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">

        </div>
        <!-- /.card-footer-->
    </div>
</div>

@endsection