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
                        <input type="text" class="form-control" id="name" name="name" value="{{$guru->name}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">NIK *</label>
                        <input type="text" class="form-control" id="nik" name="nik" value="{{$guru->nik}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">NIP *</label>
                        <input type="text" class="form-control" id="nip" name="nip" value="{{$guru->NIP}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Tempat Lahir *</label>
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="{{$guru->tempat_lahir}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Tanggal Lahir *</label>
                        <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{$guru->tanggal_lahir}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInput1">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{$guru->email}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Jenis Kelamin *</label>
                        <select class="form-control" id="jk" name="jk">
                            <option value="L" @if($guru->jk == 'L') selected @endif>Laki-Laki</option>
                            <option value="P" @if($guru->jk == 'P') selected @endif>Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <b>Foto</b><br />
                        <input type="file" name="foto">
                    </div>
                      <h5>Perhatian !</h5>
                      <h6>*Wajib di ISI</h6>
                     
                    <div class="form-group">
                        <button class="btn btn-warning float-right">Update</button>
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
        