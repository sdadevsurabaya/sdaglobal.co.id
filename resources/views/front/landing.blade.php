@extends('front/layout/layout')
@section('pageStyles')
<style>
    @media (min-width: 1200px) {
        .page-wrapper>section:nth-child(2) p {
            max-width: 556px;
            text-align: justify;
        }
    }

    @media (max-width: 991.98px) {
        .img-goal {
            max-width: 210px;
        }
    }

    .figure {
        background-color: #ededef;
        margin: 0;
        padding: calc(1em + .5vw);
        height: 100%;
        width: 100%;
    }
</style>
@endsection
@section('content')
<section class="mb-0">
    <div id="home-banner" class="carousel slide carousel-fade" data-bs-ride="false" data-bs-interval="3000" data-bs-pause="false">
       <div class="carousel-indicators d-none">
           <button type="button" data-bs-target="#home-banner" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
           <button type="button" data-bs-target="#home-banner" data-bs-slide-to="1" aria-label="Slide 2"></button>
       </div>
       <div class="carousel-inner bg-dark">
           <div class="carousel-item active">
               <img src="{{asset('assets/img/home-banner/home-banner-default-mobile.jpg')}}" class="img-mobile ratio ratio-4x3 d-lg-none" alt="...">
               <img src="{{asset('assets/img/home-banner/home-banner-default-desktop.jpg')}}" class="img-mobile ratio ratio-lg-21x9 d-none d-lg-block" alt="...">
           </div>
           <div class="carousel-item">
               <img src="..." class="img-mobile ratio ratio-4x3 d-lg-none" alt="...">
               <img src="..." class="img-mobile ratio ratio-lg-21x9 d-none d-lg-block" alt="...">
           </div>
       </div>
       <button class="carousel-control carousel-control-prev d-none" type="button" data-bs-target="#home-banner" data-bs-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="visually-hidden">Previous</span>
       </button>
       <button class="carousel-control carousel-control-next d-none" type="button" data-bs-target="#home-banner" data-bs-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="visually-hidden">Next</span>
       </button>
    </div>
</section>
<section>
    <div class="container-fluid p-0">
        <div class="row g-0 row-cols-1 row-cols-lg-2">
            <div class="col bg-dark position-relative overflow-hidden">
                <img src="{{asset('assets/img/landing/warehouse.jpg')}}" class="object-fit-cover position-absolute top-50 start-50 translate-middle" alt="">
            </div>
            <div class="col">
                <div class="row g-0 row-cols-1">
                    <div class="col">
                        <div class="container py-5 px-xl-5">
                            <h5 class="page-title text-primary">
                                ABOUT <br class="d-none d-lg-block"><b class="fw-bold">US</b>
                            </h5>
                            <p>
                                SDA Global takes pride in its reputation as a reliable and customer centric organization. Since our inception on June 2, 1992, we have remained committed to fulfilling our customers' needs. Starting with hydraulic and pneumatic products, we expanded our portfolio to include industrial and commercial solutions. Our knowledgeable team offers friendly advice based on years of combined experience and friendly demeanor.
                            </p>
                        </div>
                    </div>
                    <div class="col bg-primary text-light">
                        <div class="container pt-5 px-xl-5">
                            <h5 class="page-title text-light">
                                OUR <br class="d-none d-lg-block"><b class="fw-bold">GOAL</b>
                            </h5>
                            <p>
                                Our goal at SDA Indonesia is to stay in touch with any changes in our industry, so that we can always offer you the latest and most current information and services.
                            </p>
                        </div>
                        <div class="text-end">
                            <img src="{{asset('assets/img/goal-bg.png')}}" width="50%" height="auto" alt="" class="img-goal">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row row-cols-2 g-2 g-md-3 row-cols-lg-3 g-xl-4">
            <div class="col">
                <a href="#">
                    <figure class="figure">
                        <img src="{{asset('assets/img/landing/products-hydraulics.jpg')}}" class="ratio ratio-4x3 figure-img img-fluid m-0" alt="...">
                        <figcaption class="figure-caption text-center text-capitalize text-primary">
                            hydraulic
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="col">
                <a href="#">
                    <figure class="figure">
                        <img src="{{asset('assets/img/landing/products-pneumatics.jpg')}}" class="ratio ratio-4x3 figure-img img-fluid m-0" alt="...">
                        <figcaption class="figure-caption text-center text-capitalize text-primary">
                            pneumatic
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="col">
                <a href="#">
                    <figure class="figure">
                        <img src="{{asset('assets/img/landing/products-industrials.jpg')}}" class="ratio ratio-4x3 figure-img img-fluid m-0" alt="...">
                        <figcaption class="figure-caption text-center text-capitalize text-primary">
                            industrial fittings, adapters, clamps
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="col">
                <a href="#">
                    <figure class="figure">
                        <img src="{{asset('assets/img/landing/products-valves.jpg')}}" class="ratio ratio-4x3 figure-img img-fluid m-0" alt="...">
                        <figcaption class="figure-caption text-center text-capitalize text-primary">
                            indutrial valves
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="col">
                <a href="#">
                    <figure class="figure">
                        <img src="{{asset('assets/img/landing/products-tools.jpg')}}" class="ratio ratio-4x3 figure-img img-fluid m-0" alt="...">
                        <figcaption class="figure-caption text-center text-capitalize text-primary">
                            tools
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="col">
                <a href="#">
                    <figure class="figure">
                        <img src="{{asset('assets/img/landing/products-safety.jpg')}}" class="ratio ratio-4x3 figure-img img-fluid m-0" alt="...">
                        <figcaption class="figure-caption text-center text-capitalize text-primary">
                            fire safety & protection equipments
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
    $('.nav-home').addClass('active');
</script>
@endsection
