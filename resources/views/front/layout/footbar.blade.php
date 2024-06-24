<div class="footbar small">
    <main class="bg-primary text-light text-center text-md-start">
        <div class="container">
            <div class="row py-4 row-cols-1 gy-4 row-cols-md-auto gx-md-5 justify-content-md-between py-md-4">
                <div class="col">
                    <div class="footbar-collapse">
                        <h5 class="footbar-title text-capitalize fs-6 fw-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFootbar1">
                            about us
                        </h5>
                        <div class="collapse d-md-block" id="collapseFootbar1">
                            <div class="pt-1">
                                <ul class="text-capitalize">
                                    <li><a href="{{route('landing')}}">home</a></li>
                                    <li><a href="{{route('about.history')}}">history</a></li>
                                    <li><a href="{{route('about.leadership')}}" class="link-disabled">leadership</a></li>
                                    <li><a href="{{route('about.way')}}">the SDA way</a></li>
                                    <li><a href="{{route('business')}}">our business</a></li>
                                    <li><a href="{{route('news')}}" class="link-disabled">news & articles</a></li>
                                    <li><a href="{{route('careers.careers')}}" class="link-disabled">careers</a></li>
                                    <li><a href="{{route('contact')}}">contact us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col d-md-none">
                    <hr class="m-0">
                </div>
                <div class="col">
                    <div class="footbar-collapse">
                        <h5 class="footbar-title text-capitalize fs-6 fw-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFootbar2">
                            our business
                        </h5>
                        <div class="collapse d-md-block" id="collapseFootbar2">
                            <div class="pt-1">
                                <ul class="text-capitalize">
                                    <li><a href="{{route('business')}}">mining</a></li>
                                    <li><a href="{{route('business')}}">oil & gas</a></li>
                                    <li><a href="{{route('business')}}">manufacturing</a></li>
                                    <li><a href="{{route('business')}}">industrial</a></li>
                                    <li><a href="{{route('business')}}">commercial</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col d-md-none">
                    <hr class="m-0">
                </div>
                <div class="col ms-md-auto">
                    <div class="d-flex flex-column row-gap-4">
                        <div>
                            <img src="{{asset('assets/img/footer/idustrial.png')}}" width="100%" height="auto" alt="" style="max-width: 120px">
                        </div>
                        <div>
                            <nav class="text-underline-none d-inline-flex flex-wrap column-gap-4 row-gap-3 justify-content-center">
                                <a href="#" target="_blank" class="link-disabled"><i class="fab fa-x-twitter fa-xl"></i></a>
                                <a href="https://www.facebook.com/sdaindonesia/?locale=id_ID" target="_blank"><i class="fab fa-facebook-f fa-xl"></i></a>
                                <a href="https://www.instagram.com/sda.id/" target="_blank"><i class="fab fa-instagram fa-xl"></i></a>
                                <a href="#" target="_blank" class="link-disabled"><i class="fab fa-youtube fa-xl"></i></a>
                                <a href="https://www.tiktok.com/@sdaindonesia" target="_blank"><i class="fab fa-tiktok fa-xl"></i></a>
                            </nav>
                        </div>
                        <div>
                            <h5 class="footbar-title text-capitalize fs-6 fw-bold">feedback</h5>
                            <a href="{{route('contact')}}" target="_blank" class="btn btn-outline-light px-4 d-md-block">Help Us Improve</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="bg-dark text-light text-center">
        <div class="container pt-3">
            <div class="d-flex flex-column flex-md-row flex-md-wrap align-items-md-baseline column-gap-md-4 justify-content-md-between">
                <nav style="--bs-breadcrumb-divider: '|';" aria-label="breadcrumb">
                   <ol class="breadcrumb breadcrumb-dark text-capitalize justify-content-center justify-content-md-start">
                       <li class="breadcrumb-item"><a href="{{route('policy.policy')}}" target="_blank">privacy policy</a></li>
                       <li class="breadcrumb-item"><a href="{{route('policy.terms')}}" target="_blank">terms & conditions</a></li>
                       <li class="breadcrumb-item"><a href="{{route('policy.terms')}}" target="_blank" class="link-disabled">information on data protection</a></li>
                       <li class="breadcrumb-item"><a href="{{route('policy.terms')}}" target="_blank" class="link-disabled">help?</a></li>
                   </ol>
                </nav>
                <p class="opacity-50">Copyright &copy; <script>document.write(new Date().getFullYear())</script> SDA. All rights reserved.</p>
            </div>
        </div>
    </footer>
</div>










{{-- <div class="footbar text-center">
    <div class="footbar-top bg-primary text-white py-5">
        <div class="mobile d-lg-none">
            <div class="container d-grid row-gap-5">
                @include('front.layout.footbar-nav1')
                @include('front.layout.footbar-img-industrial')
                @include('front.layout.footbar-sosmed')
                @include('front.layout.footbar-signup')
                @include('front.layout.footbar-feedback')
                @include('front.layout.footbar-mobile')
                @include('front.layout.footbar-nav2')
            </div>
        </div>
        <div class="desktop d-none d-lg-block text-start">
            <div class="container d-grid" style="grid-template-columns: 1fr auto auto; column-gap: 5vw;">
                <div class="d-flex flex-column justify-content-between row-gap-4">
                    @include('front.layout.footbar-nav1')
                </div>
                <div class="d-flex flex-column justify-content-between row-gap-4 align-items-center">
                    @include('front.layout.footbar-img-industrial')
                    @include('front.layout.footbar-sosmed')
                    @include('front.layout.footbar-mobile')
                </div>
                <div class="d-flex flex-column justify-content-between row-gap-4">
                    @include('front.layout.footbar-signup')
                    @include('front.layout.footbar-feedback')
                    @include('front.layout.footbar-nav2')
                </div>
            </div>
        </div>
    </div>
    <div class="footbar-bottom bg-black text-white py-4">
        <div class="container d-flex flex-column row-gap-4 justify-content-center flex-lg-row row-gap-lg-0 column-gap-lg-5 justify-content-lg-between">
            <nav class="custom-breadcrumb text-capitalize">
                <a href="{{ route('policy.policy') }}" target="_blank">privacy policy</a>
                <a href="{{ route('policy.terms') }}" target="_blank">terms & conditions</a>
            </nav>
            <p class="opacity-50 m-0">
                Copyright &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>
                SDA. All rights reserved.
            </p>
        </div>
    </div>
</div> --}}
