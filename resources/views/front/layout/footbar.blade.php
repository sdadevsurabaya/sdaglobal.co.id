<div class="footbar text-center">
    <div class="footbar-top bg-primary text-white py-5">
        <div class="mobile d-lg-none">
            <div class="container d-grid row-gap-5">
                @include('front.layout.footbar-nav1')
                @include('front.layout.footbar-img-industrial')
                @include('front.layout.footbar-sosmed')
                @include('front.layout.footbar-signup')
                @include('front.layout.footbar-feedback')
                {{-- @include('front.layout.footbar-mobile') --}}
                {{-- @include('front.layout.footbar-nav2') --}}
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
                    {{-- @include('front.layout.footbar-mobile') --}}
                </div>
                <div class="d-flex flex-column justify-content-between row-gap-4">
                    @include('front.layout.footbar-signup')
                    @include('front.layout.footbar-feedback')
                    {{-- @include('front.layout.footbar-nav2') --}}
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
</div>
