@extends('layout.main')

    <!-- Jika menambahkan css -->
@push('css')
    <!-- DataTables -->


@endpush
    <!-- Judul Halaman -->
@section('judul')
Input Data Kelas
@endsection

    <!-- Isi Konten -->
@section('isi')
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <!-- PESAN ERROR -->
                        @if(count($errors)>0)
                        @foreach ($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                            {{$error}}
                        </div>

                        @endforeach
                        @endif
                        <form action="{{ route('kelas.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInput1">Kelas</label>
                                <input type="text" class="form-control" id="nama" name="nama">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary float-right">Simpan</button>

                            </div>

                        </form>
                    </div>
                    <div class="col-4">
                        <!-- CHAT -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

      
      
            <!-- AKHIR ISI -->
        </div>
        <!-- /.card-body -->
        </div>
        @endsection
@push('js')
    <!-- DataTables  & Plugins -->


@endpush
        