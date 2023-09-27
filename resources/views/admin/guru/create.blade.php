@extends('layout.main')

    <!-- Jika menambahkan css -->
@push('css')
    <!-- DataTables -->


@endpush
    <!-- Judul Halaman -->
@section('judul')
Input Data Guru
@endsection

    <!-- Isi Konten -->
@section('isi')
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            @if(count($errors)>0)
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{$error}}
            </div>

            @endforeach
            @endif
            <div class="card-body">
                <form action="/admin/guru/store" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama *</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Username *</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">NIK *</label>
                        <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">NIP *</label>
                        <input type="text" class="form-control" id="nip" name="nip" placeholder="NIP">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Tempat Lahir *</label>
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Tanggal Lahir *</label>
                        <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir">
                    </div>
                    <div class="form-group">
                        <label for="exampleInput1">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Jenis Kelamin *</label>
                        <select class="form-control" id="jk" name="jk">
                            <option value="" holder>Jenis Kelamin</option>
                            <option value="L">Laki-Laki</option>
                            <option value="P">Perempuan</option>    
                        </select>
                    </div>
                    <div class="form-group">
                        <b>Foto</b><br />
                        <input type="file" name="foto">
                    </div>
                      <h5>Perhatian !</h5>
                      <h6>*Wajib di ISI</h6>
                     
                    <div class="form-group">
                        <button class="btn btn-primary float-right">Simpan</button>
                    </div>
                </form>
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
        