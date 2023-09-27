@include('layout.loginheader')
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <img src="{{asset("/")}}img/logosekolah.png" style="display:block; margin:auto;" height="85px" width="100px"> 
  <div class="card card-outline card-primary mt-3">
    <div class="card-header text-center">
      <a href="" class="h3"><b>Aplikasi Jurnal Mengajar Ver 1.0</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Silahkan Login...!</p>

      <form action="{{route('postlogin')}}" method="post">
        {{csrf_field()}}
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Ingat saya
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-1">
        <a href="forgot-password.html">Lupa passwoord</a>
      </p>
    
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->
@include('layout.loginfooter')