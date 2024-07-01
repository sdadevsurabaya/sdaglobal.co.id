<div class="footbar bg-primary text-light small">
    <main>
        <div class="d-md-none text-center">
            <div class="container d-grid row-gap-4">
                @include('front.layout.footbar.footbar-nav')
                @include('front.layout.footbar.footbar-signup')
                @include('front.layout.footbar.footbar-hotline')
                @include('front.layout.footbar.footbar-sosmed')
            </div>
        </div>{{-- end tampilan mobile --}}
        <div class="d-none d-md-block position-relative">
            <div class="container">
                <div class="row row-cols-auto justify-content-between gx-5">
                    <div class="col">
                        <div class="d-grid row-gap-4">
                            @include('front.layout.footbar.footbar-nav')
                            <div class="pt-4">
                                @include('front.layout.footbar.footbar-signup')
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-grid row-gap-4 text-end">
                            @include('front.layout.footbar.footbar-hotline')
                            @include('front.layout.footbar.footbar-sosmed')
                        </div>
                    </div>
                </div>
            </div>
            <div class="position-absolute bottom-0 end-0" style="width: 50vw; max-width: 564px;">
                <img src="{{asset('assets/img/corner-solution.png')}}" width="100%" height="auto" alt="">
            </div>
        </div>{{-- end tampilan desktop --}}
    </main>
    <footer class="bg-dark">
        <div class="container text-center d-flex flex-column py-4 row-gap-3 flex-md-row text-md-start row-gap-md-0 column-gap-md-5 justify-content-md-between">
            <nav class="nav-privacy">
                <a href="#" target="_blank">privacy policy</a>
                <a href="#" target="_blank">terms & conditions</a>
            </nav>
            <p style="color: rgba(var(--color-light-rgb), .5);">
                Copyright &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>
                SDA. All rights reserved.
            </p>
        </div>
    </footer>
</div>
