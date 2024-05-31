@extends('layout')
@section('container')

<nav class="navbar navbar-main navbar-expand-1g px-0 mx-3 shadow-none border-radius-xl" id="navbarBlur" data-scroll="false">
  <div class="container-fluid py-0 px-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="/jenis">Jenis</a></li>
        <li class="breadcrumb-item text-sm text-white active" aria-current="page"><a href="" style="color: white;">Tambah Jenis</a></li>
      </ol>
      <h6 class="font-weight-bolder text-white mb-0">Tambah Jenis</h6>
    </nav>
  </div>
</nav>

 <!-- Main content -->
 <div class="container-fluid py-4">
 <div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
       <div class="card">
         <div class="card-header">
              <h5 class="card-title">Tambah Jenis Barang</h5> <!-- Mengurangi ukuran judul -->
            </div>
            <div class="card-body">
              <form action="storejenis" method="POST">
                {{ csrf_field() }}
                <div class="mb-3"> <!-- Menambah margin bottom untuk setiap form-group -->
                  <label for="nama_jenis" class="form-label">Nama Jenis</label>
                  <input type="text" class="form-control" id="nama_jenis" name="nama_jenis">
                </div>
                <div class="mb-3">
                  <label for="kode_jenis" class="form-label">Kode Jenis</label>
                  <input type="text" class="form-control" id="kode_jenis" name="kode_jenis">
                </div>
                <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <input type="text" class="form-control" id="keterangan" name="keterangan">
                </div>
        
                <button type="submit" class="btn btn-primary">Simpan</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
 

@endsection