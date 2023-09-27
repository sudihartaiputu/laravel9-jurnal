@extends('layout.main')

    <!-- Jika menambahkan css -->
@push('css')
    <!-- DataTables -->
<link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endpush
    <!-- Judul Halaman -->
@section('judul')
Data Guru
@endsection

    <!-- Isi Konten -->
@section('isi')
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <div class="btn-group btn-xs">
                <a href="/admin/guru/create" class="btn btn-primary btn-xs">Tambah</a>
                <a href="#" class="btn btn-success btn-xs">Impor</a>
                <a href="#" class="btn btn-info btn-xs">Expor</a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th width="5%">NO</th>
                  <th style="text-align:center">FOTO</th>
                  <th style="text-align:center">NAMA</th>
                  <th style="text-align:center">NIK</th>
                  <th style="text-align:center">NIP</th>
                  <th style="text-align:center">USERNAME</th>
                  <th style="text-align:center">EMAIL</th>
                  <th style="text-align:center">AKSI</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($guru as $gr => $hasil)
                <tr>
                  <td>{{$gr + $guru->firstitem()}}</td>
                  <td style="text-align:center"><img src="{{ asset ($hasil->foto) }}" class="img-fluid" style="width:50px"></td>
                  <td>{{$hasil ->name}}</td>
                  <td>{{$hasil ->nik}}</td>
                  <td>{{$hasil ->nip}}</td>
                  <td>{{$hasil ->username}}</td>
                  <td>{{$hasil ->email}}</td>
                  <td style="text-align:center">
                    <form action="admin/guru/destroy', $hasil->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <a class="fas fa-edit btn btn-primary btn-sm" href="/admin/guru/edit', $hasil->id)}}"></a>
                        <button type="submit" class="far fa-share-square btn btn-warning btn-sm"></button>
                    </form>
                    </>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

      
      
            <!-- AKHIR ISI -->
        </div>
        <!-- /.card-body -->
        </div>
        @endsection
@push('js')
    <!-- DataTables  & Plugins -->

@endpush
        