@extends('layout')
@section('container')

<nav class="navbar navbar-main navbar-expand-1g px-0 mx-3 shadow-none border-radius-xl" id="navbarBlur" data-scroll="false">
  <div class="container-fluid py-0 px-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="/">Dashboard</a></li>
        <li class="breadcrumb-item text-sm text-white active" aria-current="page"><a href="" style="color: white;">Jenis</a></li>
      </ol>
      <h6 class="font-weight-bolder text-white mb-0">Jenis</h6>
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
            <h5 class="card-title mb-0">Jenis Barang</h5> <!-- Mengurangi ukuran judul -->
            <a href="createjenis"><i class="fa-solid fa-user-plus"></i></a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Jenis</th>
                    <th>Kode Jenis</th>
                    <th>Keterangan</th>
                    <th>OPSI</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $d)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $d->nama_jenis }}</td>
                    <td>{{ $d->kode_jenis }}</td>
                    <td>{{ $d->keterangan }}</td>
                    <td>
                      <a href="/jenis/editjenis/{{ $d->id_jenis }}"><i class="fa-solid fa-user-pen"></i></a>
                      <a href="/jenis{{ $d->id_jenis }}"><i class="fa-regular fa-trash-can"></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

@endsection
