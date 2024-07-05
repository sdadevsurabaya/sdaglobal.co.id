<div class="footbar bg-primary text-light small">
    <main>
        <div class="mobile d-md-none text-center">
            <div class="container d-grid row-gap-4 py-5">
                <div>
                    @include('front.layout.footbar.footbar-nav')
                </div>
                <div>
                    @include('front.layout.footbar.footbar-signup')
                </div>
                <div>
                    @include('front.layout.footbar.footbar-hotline')
                </div>
                <div>
                    @include('front.layout.nav-sosmed')
                </div>
            </div>
            <div class="text-end d-none">
                <img src="{{asset('assets/img/corner-solution.png')}}" width="90%" height="auto" alt="" style="max-width: 360px;">
            </div>
        </div>
        <div class="desktop d-none d-md-block" style="background-image: url({{asset('assets/img/corner-solution.png')}});">
            <div class="container py-5 d-grid column-gap-5" style="grid-template-columns: auto 1fr;">
                <div>
                    <div class="row row-cols-1 row-gap-4">
                        <div class="col">@include('front.layout.footbar.footbar-nav')</div>
                        <div class="col">@include('front.layout.footbar.footbar-signup')</div>
                    </div>
                </div>
                <div class="text-end">
                    <div class="row row-cols-1 row-gap-4">
                        <div class="col">@include('front.layout.footbar.footbar-hotline')</div>
                        <div class="col">@include('front.layout.nav-sosmed')</div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="bg-dark">
        <div class="container">
            <div class="py-4 d-flex flex-column align-items-center text-center row-gap-3 flex-lg-row flex-lg-wrap column-gap-lg-5 align-items-lg-baseline justify-content-lg-between text-lg-start">
                <nav id="nav-privacy" class="text-capitalize">
                    <a href="{{route('policy.policy')}}" target="_blank">privacy policy</a>
                    <a href="{{route('policy.terms')}}" target="_blank">terms & conditions</a>
                </nav>
                <p class="opacity-50">
                    Copyright &copy; <script>document.write(new Date().getFullYear())</script> SDA. All rights reserved.
                </p>
            </div>
        </div>
    </footer>
</div>
