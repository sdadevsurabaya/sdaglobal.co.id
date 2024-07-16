@extends('front/layout/layout')
@section('pageStyles')
<style>
    @media (min-width: 992px) {
        .card-img-overlay {
            transform: translateY(100%);
            transition: all .36s ease-in-out;
        }

        .card:hover .card-img-overlay {
            transform: translateY(0);
        }

        .card img {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(1.2);
            opacity: .65;
            transition: all .36s ease-in-out;
        }

        .card:hover img {
            transform: translate(-50%, -50%) scale(1);
            opacity: 1;
        }
    }

    .page-banner {
        background-position-x: 70%;
        background-image: linear-gradient(to top, white, transparent), url({{asset('assets/img/industries/banner-industries.jpg')}});
    }

    @media (min-width: 992px) {
        .page-banner {
            background-image: url({{asset('assets/img/industries/banner-industries.jpg')}});
        }
    }
</style>
@endsection
@section('content')
<section>
    <div class="page-banner py-5">
        <div class="container py-5">
            <div class="row row-cols-md-auto py-5">
                <div class="col py-5">
                    <div class="p-4 bg-primary text-light px-md-5">
                        <h5 class="display-4 text-center text-md-start">
                            INDUSTRIES
                            <br><b class="fw-bold">WE SERVE</b>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-3 g-lg-4 g-xxl-5">
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden">
                        <div class="ratio ratio-16x9 bg-secondary">
                            <img src="{{asset('assets/img/industries/agriculture.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-img-overlay bg-primary text-light top-unset text-center">
                            <h5 class="card-title text-capitalize">
                                <b class="fw-bold">agriculture</b>
                            </h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden">
                        <div class="ratio ratio-16x9 bg-secondary">
                            <img src="{{asset('assets/img/industries/automotive.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-img-overlay bg-primary text-light top-unset text-center">
                            <h5 class="card-title text-capitalize">
                                <b class="fw-bold">automotive</b>
                            </h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden">
                        <div class="ratio ratio-16x9 bg-secondary">
                            <img src="{{asset('assets/img/industries/construction.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-img-overlay bg-primary text-light top-unset text-center">
                            <h5 class="card-title text-capitalize">
                                <b class="fw-bold">construction</b>
                            </h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden">
                        <div class="ratio ratio-16x9 bg-secondary">
                            <img src="{{asset('assets/img/industries/consumer-product.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-img-overlay bg-primary text-light top-unset text-center">
                            <h5 class="card-title text-capitalize">
                                <b class="fw-bold">consumer products</b>
                            </h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden">
                        <div class="ratio ratio-16x9 bg-secondary">
                            <img src="{{asset('assets/img/industries/f&b.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-img-overlay bg-primary text-light top-unset text-center">
                            <h5 class="card-title text-capitalize">
                                <b class="fw-bold">food & beverage</b>
                            </h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden">
                        <div class="ratio ratio-16x9 bg-secondary">
                            <img src="{{asset('assets/img/industries/manufacturing.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-img-overlay bg-primary text-light top-unset text-center">
                            <h5 class="card-title text-capitalize">
                                <b class="fw-bold">general manufacturing</b>
                            </h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden">
                        <div class="ratio ratio-16x9 bg-secondary">
                            <img src="{{asset('assets/img/industries/industiral.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-img-overlay bg-primary text-light top-unset text-center">
                            <h5 class="card-title text-capitalize">
                                <b class="fw-bold">heavy duty industrial equipments</b>
                            </h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden">
                        <div class="ratio ratio-16x9 bg-secondary">
                            <img src="{{asset('assets/img/industries/hvac.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-img-overlay bg-primary text-light top-unset text-center">
                            <h5 class="card-title text-capitalize">
                                <b class="fw-bold">HVAC</b>
                            </h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden">
                        <div class="ratio ratio-16x9 bg-secondary">
                            <img src="{{asset('assets/img/industries/garden.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-img-overlay bg-primary text-light top-unset text-center">
                            <h5 class="card-title text-capitalize">
                                <b class="fw-bold">lawn, garden & professional lanscaping</b>
                            </h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden">
                        <div class="ratio ratio-16x9 bg-secondary">
                            <img src="{{asset('assets/img/industries/machines.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-img-overlay bg-primary text-light top-unset text-center">
                            <h5 class="card-title text-capitalize">
                                <b class="fw-bold">machine tools & precision equipment</b>
                            </h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden">
                        <div class="ratio ratio-16x9 bg-secondary">
                            <img src="{{asset('assets/img/industries/micromobility.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-img-overlay bg-primary text-light top-unset text-center">
                            <h5 class="card-title text-capitalize">
                                <b class="fw-bold">micromobility</b>
                            </h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden">
                        <div class="ratio ratio-16x9 bg-secondary">
                            <img src="{{asset('assets/img/industries/mining.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-img-overlay bg-primary text-light top-unset text-center">
                            <h5 class="card-title text-capitalize">
                                <b class="fw-bold">mining</b>
                            </h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden">
                        <div class="ratio ratio-16x9 bg-secondary">
                            <img src="{{asset('assets/img/industries/oil.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-img-overlay bg-primary text-light top-unset text-center">
                            <h5 class="card-title text-capitalize">
                                <b class="fw-bold">oil & gas</b>
                            </h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden">
                        <div class="ratio ratio-16x9 bg-secondary">
                            <img src="{{asset('assets/img/industries/sports.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-img-overlay bg-primary text-light top-unset text-center">
                            <h5 class="card-title text-capitalize">
                                <b class="fw-bold">powersports</b>
                            </h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden">
                        <div class="ratio ratio-16x9 bg-secondary">
                            <img src="{{asset('assets/img/industries/truck.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-img-overlay bg-primary text-light top-unset text-center">
                            <h5 class="card-title text-capitalize">
                                <b class="fw-bold">truck & bus</b>
                            </h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
@section('pageScripts')
<script>
    $('.nav-industries').addClass('active');
</script>
@endsection
