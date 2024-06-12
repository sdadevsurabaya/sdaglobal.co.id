@extends('front/layout/layout')
@section('pageStyles')@endsection
@section('content')
<section
    style="background-image: url({{asset('assets/img/about/leadership-banner.png')}}); background-repeat: no-repeat; background-position: center; background-size: cover; padding: calc(5em + 2vw) 0;">
    <div class="container d-flex">
        <div class="caption bg-primary text-white py-5 px-3 px-md-5">
            <h5 class="page-title display-3">
                OUR <br><b class="fw-bold">BUSINESS</b>
            </h5>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container py-5">
        <h5 class="section-title fs-3 mb-4 mb-xl-5">
            <b class="fw-bold">Our Services</b>
        </h5>
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
    $('#nav-businesses').addClass('active');
</script>
@endsection
