@extends('front/layout/layout')
@section('pageStyles')
<style>
    .page-banner {
        background-position-x: 70%;
        background-image: linear-gradient(to top, white, transparent), url({{asset('assets/img/industries/banner-industries.jpg')}});
    }

    @media (min-width: 992px) {
        .page-banner {
            background-image: url({{asset('assets/img/industries/banner-industries.jpg')}});
        }
    }

    @media (min-width: 992px) {
        .card {
            position: relative;
        }

        .card-body {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%;
            height: 100%;
            z-index: 100;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: calc(1rem + .5vw);
            transform: translate(-50%, -50%) scale(.75);
            opacity: 0;
            transition: all .36s ease-in-out;
            overflow-x: hidden;
            overflow-y: auto;
        }

        .industries-list a:hover .card-body {
            transform: translate(-50%, -50%) scale(1);
            opacity: 1;
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
        <div class="industries-list row row-cols-1 row-cols-md-2 row-cols-xl-3 g-3">

            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden h-100">
                        <div class="ratio ratio-16x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/agriculture.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-5">
                                <b class="fw-bold">agriculture</b>
                            </h5>
                            <p class="card-text small">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi maiores perspiciatis, nesciunt veniam impedit, voluptates ullam cupiditate quos aliquam consectetur modi iusto adipisci? Voluptatibus rerum minima culpa obcaecati quia temporibus?
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden h-100">
                        <div class="ratio ratio-16x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/automotive.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-5">
                                <b class="fw-bold">automotive</b>
                            </h5>
                            <p class="card-text small">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi maiores perspiciatis, nesciunt veniam impedit, voluptates ullam cupiditate quos aliquam consectetur modi iusto adipisci? Voluptatibus rerum minima culpa obcaecati quia temporibus?
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden h-100">
                        <div class="ratio ratio-16x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/construction.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-5">
                                <b class="fw-bold">construction</b>
                            </h5>
                            <p class="card-text small">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi maiores perspiciatis, nesciunt veniam impedit, voluptates ullam cupiditate quos aliquam consectetur modi iusto adipisci? Voluptatibus rerum minima culpa obcaecati quia temporibus?
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden h-100">
                        <div class="ratio ratio-16x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/consumer-product.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-5">
                                <b class="fw-bold">consumer products</b>
                            </h5>
                            <p class="card-text small">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi maiores perspiciatis, nesciunt veniam impedit, voluptates ullam cupiditate quos aliquam consectetur modi iusto adipisci? Voluptatibus rerum minima culpa obcaecati quia temporibus?
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden h-100">
                        <div class="ratio ratio-16x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/f&b.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-5">
                                <b class="fw-bold">food & beverages</b>
                            </h5>
                            <p class="card-text small">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi maiores perspiciatis, nesciunt veniam impedit, voluptates ullam cupiditate quos aliquam consectetur modi iusto adipisci? Voluptatibus rerum minima culpa obcaecati quia temporibus?
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden h-100">
                        <div class="ratio ratio-16x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/manufacturing.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-5">
                                <b class="fw-bold">general manufacturing</b>
                            </h5>
                            <p class="card-text small">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi maiores perspiciatis, nesciunt veniam impedit, voluptates ullam cupiditate quos aliquam consectetur modi iusto adipisci? Voluptatibus rerum minima culpa obcaecati quia temporibus?
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden h-100">
                        <div class="ratio ratio-16x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/industiral.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-5">
                                <b class="fw-bold">heavy duty industrial equipments</b>
                            </h5>
                            <p class="card-text small">
                                The industrial manufacturing sector is going through significant transformation due to the emergence of advanced technologies. This shift involves the integration of intelligent and autonomous systems with data analytics and machine learning. This integration is driving the development of smart factories where equipment, processes, personnel, and devices are interconnected. Our products are designed with sublime innovation to enhance plant efficiency and productivity, while also minimising costs, effluent and other waste.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden h-100">
                        <div class="ratio ratio-16x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/hvac.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-5">
                                <b class="fw-bold">HVAC</b>
                            </h5>
                            <p class="card-text small">
                                The global HVACR systems market is experiencing growth due to the demand for innovative, eco friendly products that can be accessed from a distance. Manufacturers are embracing the challenge of complying with rigorous environmental regulations, overcoming supply chain disruptions caused by the COVID-19 pandemic, and striving to develop products that adhere to elevated air quality standards.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden h-100">
                        <div class="ratio ratio-16x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/garden.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-5">
                                <b class="fw-bold">lawn, garden & professional lanscaping</b>
                            </h5>
                            <p class="card-text small">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi maiores perspiciatis, nesciunt veniam impedit, voluptates ullam cupiditate quos aliquam consectetur modi iusto adipisci? Voluptatibus rerum minima culpa obcaecati quia temporibus?
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden h-100">
                        <div class="ratio ratio-16x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/machines.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-5">
                                <b class="fw-bold">machine tools & precission equipment</b>
                            </h5>
                            <p class="card-text small">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi maiores perspiciatis, nesciunt veniam impedit, voluptates ullam cupiditate quos aliquam consectetur modi iusto adipisci? Voluptatibus rerum minima culpa obcaecati quia temporibus?
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden h-100">
                        <div class="ratio ratio-16x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/micromobility.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-5">
                                <b class="fw-bold">micromobility</b>
                            </h5>
                            <p class="card-text small">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi maiores perspiciatis, nesciunt veniam impedit, voluptates ullam cupiditate quos aliquam consectetur modi iusto adipisci? Voluptatibus rerum minima culpa obcaecati quia temporibus?
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden h-100">
                        <div class="ratio ratio-16x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/mining.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-5">
                                <b class="fw-bold">mining</b>
                            </h5>
                            <p class="card-text small">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi maiores perspiciatis, nesciunt veniam impedit, voluptates ullam cupiditate quos aliquam consectetur modi iusto adipisci? Voluptatibus rerum minima culpa obcaecati quia temporibus?
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden h-100">
                        <div class="ratio ratio-16x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/oil.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-5">
                                <b class="fw-bold">oil & gas</b>
                            </h5>
                            <p class="card-text small">
                                In the oil and gas industry, there are common trends influenced by the global shift towards renewable energy. Technological advancements, such as surface rock drilling and natural gas extraction, enhance productivity across all sectors. We provide the essential hardware to support our customers' goals.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden h-100">
                        <div class="ratio ratio-16x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/sports.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-5">
                                <b class="fw-bold">powersports</b>
                            </h5>
                            <p class="card-text small">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi maiores perspiciatis, nesciunt veniam impedit, voluptates ullam cupiditate quos aliquam consectetur modi iusto adipisci? Voluptatibus rerum minima culpa obcaecati quia temporibus?
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden h-100">
                        <div class="ratio ratio-16x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/truck.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-5">
                                <b class="fw-bold">truck & bus</b>
                            </h5>
                            <p class="card-text small">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi maiores perspiciatis, nesciunt veniam impedit, voluptates ullam cupiditate quos aliquam consectetur modi iusto adipisci? Voluptatibus rerum minima culpa obcaecati quia temporibus?
                            </p>
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
