<div id="footbar" class="text-light small text-center text-lg-start">
    <div class="bg-primary">
        <div class="container py-5">
            <div class="row row-cols-1 row-gap-4 row-cols-lg-auto row-gap-lg-0 column-gap-lg-4 justify-content-lg-between column-gap-xl-5">
                <div class="col">
                    <div class="d-grid row-gap-4">
                        <div>
                            @include('front.layout.footbar.footbar-nav')
                        </div>
                        <div>
                            @include('front.layout.footbar.footbar-signup')
                        </div>
                    </div>
                </div>
                <div class="col">
                    <b class="fw-bold">
                        Hotline : <a href="tel:+623199008800" target="_blank" class="fs-4">+62 31 9900 8800</a>
                    </b>
                </div>
                <div class="col">
                    <div class="d-grid row-gap-4 text-lg-end">
                        <div>
                            <b class="fw-bold">
                                WA Only : <a href="https://wa.me/+6282280808800" target="_blank" class="fs-4">+62 822 8080 8800</a>
                            </b>
                        </div>
                        <div>
                            @include('front.layout.nav-sosmed')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-dark">
        <div class="container">
            <div class="py-4 d-flex flex-column justify-content-center flex-lg-row flex-lg-wrap align-items-lg-baseline justify-content-lg-between">
                <nav style="--bs-breadcrumb-divider: '|';" aria-label="breadcrumb">
                   <ol class="breadcrumb text-capitalize justify-content-center justify-content-lg-start">
                       <li class="breadcrumb-item"><a href="{{route('policy.policy')}}" target="_blank">privacy policy</a></li>
                       <li class="breadcrumb-item"><a href="{{route('policy.terms')}}" target="_blank">terms & conditions</a></li>
                   </ol>
                </nav>
                <p class="opacity-50">
                    Copyright &copy; <script>document.write(new Date().getFullYear())</script> SDA. All rights reserved.
                </p>
            </div>
        </div>
    </div>
</div>
