<div class="navtop bg-white py-3 py-lg-4">
    <div class="container d-lg-grid row-gap-lg-4">
        <ul class="list-unstyled m-0 d-grid align-items-center d-lg-block" style="grid-template-columns: 1fr auto 1fr;">
            <li class="d-lg-none">
                <button data-bs-toggle="offcanvas" data-bs-target="#sidebar">
                    <i class="fas fa-bars fa-xl"></i>
                </button>
            </li>
            <li>
                <h1 class="navbrand m-0 text-center d-flex">
                    <a href="{{ route('landing') }}" class="d-flex mx-auto">
                        <img src="{{asset('assets/img/logo/logo-sda.svg')}}" width="auto" alt="">
                    </a>
                </h1>
            </li>
            <li class="text-end d-lg-none">
                <button>
                    <i class="fas fa-search fa-xl"></i>
                </button>
            </li>
        </ul>
        <div class="offcanvas-lg offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="sidebar" aria-labelledby="sidebarLabel">
            <div class="offcanvas-header">
                <button type="button" class="ms-auto" data-bs-toggle="offcanvas" data-bs-target="#sidebar">
                    <i class="fas fa-close fa-2x"></i>
                </button>
            </div>
            <div class="offcanvas-body">
                <ul class="list-unstyled m-0 text-capitalize d-flex flex-column row-gap-3 flex-lg-row flex-wrap justify-content-center w-100 column-gap-4 navtop-nav" style="font-size: large;">
                    <li>
                        <a href="{{ route('landing') }}" id="nav-home">
                            home
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" id="nav-about" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            about us
                        </a>
                        <ul class="dropdown-menu rounded-0">
                            <li class="dropdown-item" id="nav-history">
                                <a href="{{ route('about.history') }}">
                                    history
                                </a>
                            </li>
                            <li class="dropdown-item" id="nav-sda-way">
                                <a href="{{ route('about.way') }}">
                                    the SDA way
                                </a>
                            </li>
                            <li class="dropdown-item" id="nav-leadership">
                                <a href="{{ route('about.leadership') }}">
                                    leadership
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('business') }}" id="nav-businesses">
                            our businesses
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('news') }}" id="nav-news">
                            news
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('careers.careers') }}" id="nav-careers">
                            careers
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" id="nav-contact">
                            contact us
                        </a>
                    </li>
                </ul>
                <ul class="list-unstyled m-0 column-gap-4" id="navcorner">
                    <li>
                        <button>
                            <i class="fas fa-search fa-xl"></i>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>