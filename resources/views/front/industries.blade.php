@extends('front/layout/layout')
@section('pageStyles')
<style>
    .page-banner {
        background-position-x: 70%;
        background-image: linear-gradient(to top, white, transparent, transparent), url({{asset('assets/img/industries/banner-industries.jpg')}});
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
<section class="p-0">
    <div class="page-banner">
        <div class="container h-100">
            <div class="row row-cols-lg-auto h-100 align-items-end align-items-lg-center">
                <div class="col py-5">
                    <div class="p-4 bg-lg-primary text-primary text-lg-light px-md-5">
                        <h5 class="display-3 text-center text-lg-start">
                            INDUSTRIES
                            <br class="d-none d-lg-inline"><b class="fw-bold">WE SERVE</b>
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
                    <div class="card overflow-hidden h-100 border-0">
                        <div class="ratio ratio-21x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/agriculture.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-4">
                                <b class="fw-bold">agriculture</b>
                            </h5>
                            <p class="card-text small">
                                Our goal is to provide you with the most advanced and efficient solutions that will help you maximize your farm's productivity and profitability.
                                <br>
                                In addition to our range of hoses, belts, and hydraulic solutions, we also offer comprehensive support and maintenance services to ensure the longevity and optimal performance of your equipment. We understand the importance of minimizing downtime and maximizing uptime, and we are committed to providing timely and reliable assistance whenever you need it.
                                <br>
                                At SDA Global, we value the trust and partnership we have with our customers. We strive to build long-lasting relationships by consistently delivering top-quality products and exceptional customer service.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden h-100 border-0">
                        <div class="ratio ratio-21x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/automotive.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-4">
                                <b class="fw-bold">automotive</b>
                            </h5>
                            <p class="card-text small">
                                Our commitment is to quality, reliability, and performance. We supply advanced materials compounded with an experienced team of engineers who continually set new industry standards supports for our high-quality products. As we face the challenges presented by future seasons, you can rely on us to be your reliable and dedicated partner.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden h-100 border-0">
                        <div class="ratio ratio-21x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/construction.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-4">
                                <b class="fw-bold">construction</b>
                            </h5>
                            <p class="card-text small">
                                Equipment in construction environments is subject to harsh conditions such as sun exposure, chemical exposure, abrasion, and weathering. Costly downtime can result from these conditions, which can lead to premature equipment failure. With a commitment to efficiency, SDA Global provides the necessary products to help you get the job done. We are committed to ensuring that you have the necessary products to efficiently complete your job. Reach out to us for help with your most challenging applications.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden h-100 border-0">
                        <div class="ratio ratio-21x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/consumer-product.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-4">
                                <b class="fw-bold">consumer products</b>
                            </h5>
                            <p class="card-text small">
                                SDA Global is dedicated to delivering reliable solutions to diverse sectors, including off-shore oil operations and commercial agriculture. We extend our dedication to providing exceptional solutions to everyday applications, ensuring peak performance for your tools, machines, and appliances. Our products, such as belts and industrial hoses, are engineered for superior performance through meticulous research and high-quality materials, surpassing competitors in durability.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden h-100 border-0">
                        <div class="ratio ratio-21x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/f&b.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-4">
                                <b class="fw-bold">food & beverages</b>
                            </h5>
                            <p class="card-text small">
                                We serve as a prominent symbol of innovation in providing products for the food and beverage manufacturing industry. We offer cutting-edge hygienic conveyor belts, food grade industrial hoses, and clean power transmission solutions. Our products are carefully designed to enhance performance, decrease the need for maintenance, and lower the risk of contamination, all while meeting the industry's demanding standards for efficiency, quality, and safety.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden h-100 border-0">
                        <div class="ratio ratio-21x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/manufacturing.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-4">
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
                    <div class="card overflow-hidden h-100 border-0">
                        <div class="ratio ratio-21x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/industiral.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-4">
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
                    <div class="card overflow-hidden h-100 border-0">
                        <div class="ratio ratio-21x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/hvac.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-4">
                                <b class="fw-bold">HVAC</b>
                            </h5>
                            <p class="card-text small">
                                The global HVAC systems market is experiencing growth due to the demand for innovative, eco friendly products that can be accessed from a distance. Manufacturers are embracing the challenge of complying with rigorous environmental regulations, overcoming supply chain disruptions caused by the COVID-19 pandemic, and striving to develop products that adhere to elevated air quality standards.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card overflow-hidden h-100 border-0">
                        <div class="ratio ratio-21x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/garden.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-4">
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
                    <div class="card overflow-hidden h-100 border-0">
                        <div class="ratio ratio-21x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/machines.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-4">
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
                    <div class="card overflow-hidden h-100 border-0">
                        <div class="ratio ratio-21x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/micromobility.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-4">
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
                    <div class="card overflow-hidden h-100 border-0">
                        <div class="ratio ratio-21x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/mining.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-4">
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
                    <div class="card overflow-hidden h-100 border-0">
                        <div class="ratio ratio-21x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/oil.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-4">
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
                    <div class="card overflow-hidden h-100 border-0">
                        <div class="ratio ratio-21x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/sports.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-4">
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
                    <div class="card overflow-hidden h-100 border-0">
                        <div class="ratio ratio-21x9 ratio-lg-1x1 bg-secondary">
                            <img src="{{asset('assets/img/industries/truck.jpg')}}" class="object-fit-cover" alt="...">
                        </div>
                        <div class="card-body bg-primary text-light">
                            <h5 class="card-title text-uppercase fs-4">
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
