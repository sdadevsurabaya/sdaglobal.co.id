@extends('front/layout/layout')
@section('pageStyles')@endsection
@section('content')
<section style="background-image: url({{asset('assets/img/about/leadership-banner.png')}}); background-repeat: no-repeat; background-position: center; background-size: cover; padding: calc(5em + 2vw) 0;">
    <div class="container">
        <div class="row">
            <div class="col col-12 col-md-auto">
                <div class="caption bg-primary text-white py-5 px-4 px-md-5">
                    <h5 class="page-title display-3 text-center text-md-start">
                        OUR <br class="d-none d-lg-block"><b class="fw-bold">INDUSTRIES</b>
                    </h5>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container py-lg-5">
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-4 g-xl-5">
            <div class="col">
                <a href="#">
                    <figure class="figure m-0">
                        <img src="{{asset('assets/img/businesses/mining.jpg')}}" class="figure-img img-fluid mb-0" alt="...">
                        <figcaption class="figure-caption text-center bg-primary text-white px-3 py-4 fs-5 fw-medium">
                            Mining
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="col">
                <a href="#">
                    <figure class="figure m-0">
                        <img src="{{asset('assets/img/businesses/oil&gas.jpg')}}" class="figure-img img-fluid mb-0" alt="...">
                        <figcaption class="figure-caption text-center bg-primary text-white px-3 py-4 fs-5 fw-medium">
                            Oil & Gas
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="col">
                <a href="#">
                    <figure class="figure m-0">
                        <img src="{{asset('assets/img/businesses/manufacturing.jpg')}}" class="figure-img img-fluid mb-0"
                            alt="...">
                        <figcaption class="figure-caption text-center bg-primary text-white px-3 py-4 fs-5 fw-medium">
                            Manufacturing
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="col">
                <a href="#">
                    <figure class="figure m-0">
                        <img src="{{asset('assets/img/businesses/industrial.jpg')}}" class="figure-img img-fluid mb-0" alt="...">
                        <figcaption class="figure-caption text-center bg-primary text-white px-3 py-4 fs-5 fw-medium">
                            Industrial
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="col">
                <a href="#">
                    <figure class="figure m-0">
                        <img src="{{asset('assets/img/businesses/commercial.jpg')}}" class="figure-img img-fluid mb-0" alt="...">
                        <figcaption class="figure-caption text-center bg-primary text-white px-3 py-4 fs-5 fw-medium">
                            Commercial
                        </figcaption>
                    </figure>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
@section('pageScripts')
<script>
    $('#nav-business').addClass('active');
</script>
@endsection
