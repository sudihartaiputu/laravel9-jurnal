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
Data Siswa
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
                <a href="#" class="btn btn-primary btn-xs">Tambah</a>
                <a href="#" class="btn btn-success btn-xs">Impor</a>
                <a href="#" class="btn btn-info btn-xs">Expor</a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>NIS</th>
                  <th>USERNAME</th>
                  <th>NAMA</th>
                  <th>KELAS</th>
                  <th>AKSI</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>22001</td>
                  <td>sudiharta</td>
                  <td>I PUTU SUDIHARTA</td>
                  <td>X.1</td>
                  <td>
                    <a href="#" class="btn btn-warning btn-xs">Edit</a>
                    <a href="#" class="btn btn-danger btn-xs">Delete</a>
                  </td>
                </tr>
            
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
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
@endpush
        