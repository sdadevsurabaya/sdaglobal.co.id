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
                    <div class="card overflow-hidden">
                        <div class="ratio ratio-16x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/agriculture.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-5">
                                <b class="fw-bold">aerospace</b>
                            </h5>
                            <p class="card-text small">
                                SDA Global unquestionably has extensive engineering expertise and a solid groundwork in the commercial, business, and military aircraft sectors. It positions the company to greatly enhance customer programs, resulting in heightened productivity and profitability for its clients.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden">
                        <div class="ratio ratio-16x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/automotive.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-5">
                                <b class="fw-bold">digital</b>
                            </h5>
                            <p class="card-text small">
                                Our wide range of unified services makes use of the latest digital technology to help you easily recognise and access valuable information about your products. With SDA Global's user-friendly digital product groups, you can effortlessly learn and organise SDA Global's components.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden">
                        <div class="ratio ratio-16x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/construction.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-5">
                                <b class="fw-bold">electronics & semiconductors</b>
                            </h5>
                            <p class="card-text small">
                                We are a credible and trusted provider for worldwide producers of electronic appliances, aeronautical and machine. We provide them with uncompromising manufacturing standards and satisfy them with the ever-increasing demands of their customers.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden">
                        <div class="ratio ratio-16x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/consumer-product.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-5">
                                <b class="fw-bold">healthcare & life sciences</b>
                            </h5>
                            <p class="card-text small">
                                SDA Global's team of experts actively cooperates with manufacturers of health and analytical devices. We engage in professional partnerships with clients to conceive and generate pioneering systems and subsystems that effectively push the boundaries of innovation in these industries.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden">
                        <div class="ratio ratio-16x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/f&b.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-5">
                                <b class="fw-bold">hvac & refrigeration</b>
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
                    <div class="card overflow-hidden">
                        <div class="ratio ratio-16x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/manufacturing.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-5">
                                <b class="fw-bold">industrial & chemical processing</b>
                            </h5>
                            <p class="card-text small">
                                In the field of industrial and chemical processing, we encounter demanding conditions such as handling volatile materials, climate change and unsafe secondary products. We provide comprehensive solutions that will elevate plant safety, enhance product quality, reduce hiatus during production, and assure conformity with regulations.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden">
                        <div class="ratio ratio-16x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/industiral.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-5">
                                <b class="fw-bold">industrial manufacturing equipment</b>
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
                    <div class="card overflow-hidden">
                        <div class="ratio ratio-16x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/hvac.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-5">
                                <b class="fw-bold">off road machinery</b>
                            </h5>
                            <p class="card-text small">
                                The various sectors within the outdoor machinery industry are working together to embrace common trends. These industries are joining forces to enhance productivity by utilising technological innovations. This involves adopting automation, digitalisation, shifting towards battery-powered device to comply with stringent standard of environment sustainability, and giving top priority to workplace safety through careful redesign.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden">
                        <div class="ratio ratio-16x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/garden.jpg')}}" class="object-fit-cover" alt="...">
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
                    <div class="card overflow-hidden">
                        <div class="ratio ratio-16x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/machines.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-5">
                                <b class="fw-bold">power generation & renewable energy</b>
                            </h5>
                            <p class="card-text small">
                                Key trends that will change the phenomenon of global power generation in the coming years are climate change and digitalisation. Climate change speeds the substitution of fossil with renewable energy sources. Digitalization, which is revolutionizing the way power is yielded, is distributed and used on a global scale. These 2 causes are set to transform the energy industry.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden">
                        <div class="ratio ratio-16x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/micromobility.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-5">
                                <b class="fw-bold">transportation</b>
                            </h5>
                            <p class="card-text small">
                                The transportation sector is on the brink of experiencing substantial transformations, with significant progress expected to affect key sectors like automobiles, vessels, trains. Shifting from fossil fuels with electricity, strict regulations controlling gas discharge set to revolutionise industry and impact engineering approach.
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
