@extends('layout.main')

    <!-- Jika menambahkan css -->
@push('css')
  

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
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <!-- PESAN SUKSES -->
                        @if(Session::has('sukses'))
                        <div class="alert alert-success" role="alert">
                            {{ Session ('sukses')}}
                        </div>

                        @endif
                        <a class="btn btn-primary btn-sm mb-3" href="{{ route('kelas.create')}}">Tambah Kelas</a>
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th width="5%">No</th>
                                    <th style="text-align:center">Nama Kelas</th>
                                    <th width="20%" style="text-align:center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kelas as $k => $hasil)
                                <tr>
                                    <td>{{$k + $kelas->firstitem() }}</td>
                                    <td>{{$hasil->nama}}
                                    <td style="text-align:center">
                                        <form action="{{route('kelas.destroy', $hasil->id)}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <a class="fas fa-edit btn btn-primary btn-sm" href="{{route ('kelas.edit', $hasil->id)}}"></a>
                                            <button type="submit" class="fas fa-trash-alt btn btn-danger btn-sm"></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="float-right mt-3">{{$kelas->links()}}</div>
                    </div>
                </div>
                <div class="col-4">

                </div>
            </div>
        </div>
    </section>
      

        @endsection
@push('js')


@endpush
        