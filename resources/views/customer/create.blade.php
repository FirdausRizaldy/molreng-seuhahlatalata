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
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <div class="col-md-12">
            <div class="box">
              <div class="box-header with-border">
                <form role="form" action="/insertcustomer_v1" method="POST">
                  @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label>ID Customer</label>
                      <input hidden type="text" class="form-control" id="id_cus" name="id_cus"
                        placeholder="Id gatau kok ga incement">
                    </div>
                    <div class="form-group">
                      <label for="">Nama</label>
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="Siapa sih nama mu ?">
                    </div>
                    <div class="form-group">
                      <label for="">Alamat</label>
                      <input type="text" class="form-control" id="alamat" name="alamat"
                        placeholder="Boleh tau Rumah mu nda ">
                    </div>
                    <div class="form-group">
                      <label>Provinsi</label>
                      <select id="prov" name="prov" class="form-control select2" style="width: 100%;">
                        <option selected="selected" disable='true'>Pilih provinsi dong</option>
                        {{-- @foreach($provinsi as $prov)
                        <option value="{{$prov->id_provinsi}}">{{$prov->nama_provinsi}}</option>
                        @endforeach --}}
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Kota</label>
                      <select id="kota" name="kota" class="form-control select2" style="width: 100%;">
                        <option selected="selected" disabled>Kota mana</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Kecamatan</label>
                      <select id="kec" nama="kec" class="form-control select2" style="width: 100%;">
                        <option selected="selected" disabled>Kecamatan ibu mu ?</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Keluarahan</label>
                      <select id="kel" name="kel" class="form-control select2" style="width: 100%;">
                        <option selected="selected" disabled>Keluarahan cidek rumah mu</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>KodePos</label>
                      <select id="kode_p" name="kode_p" class="form-control select2" style="width: 100%;">
                        <option selected="selected" disabled>Yang mana ? aku mau kirim paket</option>
                      </select>
                    </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
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