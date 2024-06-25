<nav class="navbar navbar-light bg-white">
    <div class="container">
        <header>
            <div class="d-lg-none">
                <button data-bs-toggle="offcanvas" data-bs-target="#navside">
                    <i class="fas fa-bars fa-xl"></i>
                </button>
            </div>
            <div>
                <h1 class="navbrand d-flex m-0">
                    <a href="{{route('landing')}}" class="d-flex">
                        <img src="{{asset('assets/img/logo/logo-sda.svg')}}" width="auto" style="height: calc(32px + 1vw); max-height: 56px;" alt="SDA">
                    </a>
                </h1>
            </div>
            <div class="d-lg-none">
                {{-- <button class="float-end link-disabled">
                    <i class="fas fa-search fa-xl"></i>
                </button> --}}
            </div>
        </header>
        <main class="w-100">
            <div class="offcanvas-lg offcanvas-start" tabindex="-1" id="navside" aria-labelledby="navsideLabel">
                <div class="offcanvas-header bg-dark">
                    <button type="button" class="btn btn-sm btn-outline-light ms-auto" data-bs-toggle="offcanvas" data-bs-target="#navside">CLOSE</button>
                </div>
                <div class="offcanvas-body p-0">
                    <ul class="text-capitalize w-100 d-lg-flex justify-content-lg-center nav-list">
                        <li><a href="{{route('landing')}}" id="nav-home">home</a></li>
                        <li class="d-lg-none"><hr class="m-0"></li>
                        <li><a href="{{route('about')}}" id="nav-about">about us</a></li>
                        {{-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle" id="nav-about">about us</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('about.history')}}" class="dropdown-item" id="nav-history">history</a></li>
                                <li><a href="{{route('about.leadership')}}" class="dropdown-item link-disabled" id="nav-leadership">leadership</a></li>
                                <li><a href="{{route('about.way')}}" class="dropdown-item" id="nav-way">the SDA way</a></li>
                            </ul>
                        </li> --}}
                        <li class="d-lg-none"><hr class="m-0"></li>
                        <li><a href="{{route('business')}}" id="nav-business">industries</a></li>
                        {{-- <li class="d-lg-none"><hr class="m-0"></li>
                        <li><a href="{{route('news')}}" class="link-disabled" id="nav-news">news & articles</a></li>
                        <li class="d-lg-none"><hr class="m-0"></li>
                        <li><a href="{{route('careers.careers')}}" class="link-disabled" id="nav-careers">careers</a></li> --}}
                        <li class="d-lg-none"><hr class="m-0"></li>
                        <li><a href="{{route('contact')}}" id="nav-contact">contact us</a></li>
                        {{-- <li class="d-none d-lg-block"><a href="#" class="link-disabled"><i class="fas fa-search fa-lg"></i></a></li> --}}
                    </ul>
                </div>
            </div>
        </main>
    </div>
</nav>
