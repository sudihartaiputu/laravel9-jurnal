<!DOCTYPE html>
<html lang="en">
@include('layout.header')
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
@include('layout.navbar')
  <!-- /.navbar -->
<!-- Main Sidebar Container -->
    @include('layout.sidebar')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>@yield('judul')</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<!-- Main content -->
    <section class="content">
<!-- Default box -->
     @yield('isi')
<!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->
@include('layout.footer')
