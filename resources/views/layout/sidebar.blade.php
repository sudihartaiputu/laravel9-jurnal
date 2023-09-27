<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{asset("/")}}admin/beranda" class="brand-link">
      <img src="{{asset("/")}}img/logosekolah.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SMAN 11 LUTRA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset("/")}}{{auth()->user()->foto}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{auth()->user()->name}}</a>
        </div>
      </div>

    <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{url("admin/beranda")}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
{{-- PENGATURAN-  --}}
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Pengaturan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="{{url("admin/profil")}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profil Sekolah</p>
                </a>
                </li>
              </ul>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url("admin/kelas")}}" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Kelas</p>
                    </a>
                  </li>
                </ul>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url("admin/mapel")}}" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Mata Pelajaran</p>
                    </a>
                  </li>
                </ul>
{{-- END PENGATURAN --}}
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Manajemen User
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url("admin/guru")}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Guru</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url("admin/walikelas")}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Wali Kelas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url("admin/siswa")}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Siswa
                  </p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-header">Menu Guru</li>
          <li class="nav-item">
            <a href="{{url("admin/materi")}}" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Materi
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url("admin/jurnalmengajar")}}" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Jurnal Mengajar
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url("admin/pelanggaran")}}" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Pelanggaran
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
      
          <li class="nav-item has-treeview">
            <a href="{{route('logout')}}" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                    Keluar
                </p>
            </a>
        </li>
    
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>