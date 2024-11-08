<nav class="navbar bg-white">
    <div class="container">
        <header>
            <div>
                <button data-bs-toggle="offcanvas" data-bs-target="#navside" id="trigger-navside" class="d-lg-none">
                    <i class="fas fa-bars fa-xl"></i>
                </button>
            </div>
            <div>
                <h1 class="navbrand">
                    <a href="{{route('landing')}}">
                        <img src="{{asset('assets/img/logo/logo-sda-global.svg')}}" width="100%" height="auto" alt="SDA Global">
                    </a>
                </h1>
            </div>

            {{-- <div>
                <div class="d-flex align-items-center column-gap-1 float-end">
                    @if (session()->get('lang') == "langen")
                        <button class="active" id="btn-langen" onclick="langen()">EN</button>
                    @else
                        <button class="" id="btn-langen" onclick="langen()">EN</button>
                    @endif
                    <div class="opacity-50">|</div>
                    @if (session()->get('lang') == "langid")
                        <button class="active" id="btn-langid" onclick="langid()">ID</button>
                    @else
                        <button class="" id="btn-langid" onclick="langid()">ID</button>
                    @endif

                </div>
            </div> --}}

            <div style="visibility: hidden;">
                <div class="d-flex align-items-center column-gap-1 float-end">
                    @if (session()->get('lang') == "langen")
                        <button class="active" id="btn-langen" onclick="langen()">EN</button>
                    @else
                        <button class="" id="btn-langen" onclick="langen()" style="pointer-events: none">EN</button>
                    @endif
                    <div class="opacity-50">|</div>
                    @if (session()->get('lang') == "langid")
                        <button class="active" id="btn-langid" onclick="langid()" style="pointer-events: none">ID</button>
                    @else
                        <button class="" id="btn-langid" onclick="langid()" style="pointer-events: none">ID</button>
                    @endif

                </div>
            </div>
        </header>
        <main>
            <div class="offcanvas-lg offcanvas-start" tabindex="-1" id="navside" aria-labelledby="navsideLabel">
                <div class="offcanvas-body d-flex align-items-center position-relative d-lg-block">
                    <button class="position-absolute top-0 end-0 btn my-3 me-3 ms-auto d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#navside">
                        <i class="fas fa-x fa-xl"></i>
                    </button>
                    <ul class="navbar-nav text-capitalize list-unstyled text-center w-100 row-gap-3">
                        <li class="nav-item">
                            <a href="{{route('landing')}}" class="nav-link nav-home">home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('landing')}}#home-products" class="nav-link">products</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('about')}}" class="nav-link nav-about">about SDA</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('industries')}}" class="nav-link nav-industries">industries</a>
                        </li>
                        {{-- <li class="nav-item opacity-50">
                            <a href="#" target="_blank" class="nav-link nav-buy " style="pointer-events: none;">where to buy</a>
                        </li> --}}
                        <li class="nav-item">
                            <a href="{{route('contact')}}" class="nav-link nav-contact">contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </main>
    </div>
</nav>
