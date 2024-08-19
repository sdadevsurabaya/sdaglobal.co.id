<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="{{ url('../dashboard') }}"><img loading="lazy" src="{{asset('assets/img/logo/logo-sda-global.svg')}}" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="{{ url('../dashboard') }}"><img loading="lazy" src="{{asset('assets/img/logo/ikon-sda.ico')}}"
                alt="logo" /></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
        </button>

        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown"
                    aria-expanded="false">
                    <div class="nav-profile-img">
                        <img loading="lazy" src="{{ url('/') }}/admin/assets/images/faces/face1.jpg" alt="image">
                        <span class="availability-status online"></span>
                    </div>
                    <div class="nav-profile-text">
                        <p class="mb-1 text-black">{{ Auth::user()->name }}</p>
                    </div>
                </a>
                <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                    <a class="dropdown-item" href="#">
                        <i class="mdi mdi-cached mr-2 text-success"></i> Activity Log </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route('actionlogout')}}">
                        <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
                </div>
            </li>
            <li class="nav-item d-none d-lg-block full-screen-link">
                <a class="nav-link">
                    <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
                </a>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>

 <!-- partial -->
 <div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item nav-profile">
          <a href="#" class="nav-link">
            <div class="nav-profile-image">
              <img loading="lazy" src="{{ url('/') }}/admin/assets/images/faces/face1.jpg" alt="profile">
              <span class="login-status online"></span>
              <!--change to offline or busy as needed-->
            </div>
            <div class="nav-profile-text d-flex flex-column">
              <span class="font-weight-bold mb-2">{{ Auth::user()->name }}</span>
              <span class="text-secondary text-small">{{ Auth::user()->role }}</span>
            </div>
            <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/dashboard') }}">
            <span class="menu-title">Dashboard</span>
            <i class="mdi mdi-home menu-icon"></i>
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#data_master" aria-expanded="false" aria-controls="data_master">
              <span class="menu-title">Data Master</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-database-plus menu-icon"></i>
            </a>
            <div class="collapse" id="data_master">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="#"> Level / Posision </a></li>
              </ul>
            </div>
          </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#lowongan" aria-expanded="false" aria-controls="lowongan">
            <span class="menu-title">Lowongan</span>
            <i class="menu-arrow"></i>
            <i class="mdi mdi-account-search menu-icon"></i>
          </a>
          <div class="collapse" id="lowongan">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="#"> Post Lowongan </a></li>
              <li class="nav-item"> <a class="nav-link" href="#"> List All Candidate </a></li>
            </ul>
          </div>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link" href="pages/charts/chartjs.html">
            <span class="menu-title">Karyawan Masuk</span>
            <i class="mdi mdi mdi-login-variant menu-icon"></i>
          </a>
        </li> --}}
      </ul>
    </nav>
