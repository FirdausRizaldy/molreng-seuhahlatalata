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
      <h3 class="card-title">Data Produk</h3>
    </div>
    <div class="card-body">
      <table id="example2" class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>No</th>
            <th>ID Produk</th>
            <th>Nama</th>
            <th>Harga</th>
          </tr>
        </thead>
        @foreach($produk as $data)
        <tr>
          <td>{{ $loop -> iteration }}</td>
          <td>{{ $data -> id_produk }}</td>
          <td>{{ $data -> nama_produk }}</td>
          <td>{{ $data -> harga_produk }}</td>
        </tr>
        @endforeach
      </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">

    </div>
    <!-- /.card-footer-->
  </div>
</div>

@endsection