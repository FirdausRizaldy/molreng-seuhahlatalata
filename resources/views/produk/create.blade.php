@extends('layouts/main_layout')

@section('page_title', 'Home')


@section('page_header', 'welcome')
@section('page_description', 'Selamat Datang!')


@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Dashboard</li>
@endsection

@section('content')
<style>
  input::-webkit-outer-spin-button,
  input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
  }

  input[type=number] {
    -moz-appearance: textfield;
  }
</style>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <div class="col-md-12">
            <div class="box">
              <div class="box-header with-border">
                <form action="/simpanproduk" method="POST">
                  @csrf
                  <fieldset>
                    <div class="form-group">
                      <label class="control-label col-md-4">ID Produk:</label>
                      <div class="col-md-8">
                        <input class="form-control input-full" type="text" id="id" name="id" autocomplete="off">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-4">Nama Produk:</label>
                      <div class="col-md-8">
                        <input class="form-control input-full" type="text" id="nama" name="nama" autocomplete="off">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-4">Harga Produk:</label>
                      <div class="col-md-8">
                        <input class="form-control input-full" type="number" id="harga" name="harga" autocomplete="off">
                      </div>
                    </div>
                    <br><br><input type="submit" class="btn btn-info" value="Simpan">
                  </fieldset>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.col-md-6 -->
  </div>
  <!-- /.row -->
</div>

@endsection