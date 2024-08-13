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
                        <div class="card-body bg-primary text-light d-lg-block">
                            <h5 class="card-title text-uppercase fs-4 mb-3">
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
                        <div class="card-body bg-primary text-light d-lg-block">
                            <h5 class="card-title text-uppercase fs-4 mb-3">
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
                        <div class="card-body bg-primary text-light d-lg-block">
                            <h5 class="card-title text-uppercase fs-4 mb-3">
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
                        <div class="card-body bg-primary text-light d-lg-block">
                            <h5 class="card-title text-uppercase fs-4 mb-3">
                                <b class="fw-bold">consumer products</b>
                            </h5>
                            <p class="card-text small">
                                SDA Global is dedicated to delivering reliable solutions to diverse sectors, including off-shore oil operations and commercial agriculture. We extend our dedication to providing exceptional solutions to everyday applications, ensuring peak performance for your tools, machines, and appliances. Our products, such as belts and industrial hoses, are engineered for superior performance through meticulous research and high-quality materials, surpassing competitors in durability.
                                <br>
                                This means that you can rely on our products to help you complete tasks effectively and quickly.
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
                        <div class="card-body bg-primary text-light d-lg-block">
                            <h5 class="card-title text-uppercase fs-4 mb-3">
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
                        <div class="card-body bg-primary text-light d-lg-block">
                            <h5 class="card-title text-uppercase fs-4 mb-3">
                                <b class="fw-bold">general manufacturing</b>
                            </h5>
                            <p class="card-text small">
                                Acknowledging the obstacles inherent in your production operations, we are firmly devoted to utilizing our extensive industry experience to offer solutions that optimize efficiency, mitigate downtime, and support your endeavours in attaining safety, quality, delivery, and financial performance targets.
                                <br><br>
                                The unwavering commitment we have to excellence is exemplified by our decision to replace outdated roller chains with advanced maintenance-free synchronous belt drives, as well as our efforts to supply hose and hydraulic systems in order to simplify maintenance procedures and strengthen safety measures.
                                <br><br>
                                SDA Global is devoted to supplying essential resources, support, and cutting-edge solutions to foster advancement in the manufacturing process.
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
                        <div class="card-body bg-primary text-light d-lg-block">
                            <h5 class="card-title text-uppercase fs-4 mb-3">
                                <b class="fw-bold">heavy duty industrial equipments</b>
                            </h5>
                            <p class="card-text small">
                                Within the heavy-duty industries, SDA Global is renowned for delivering dependable belt, industrial hose, and hydraulic solutions that are meticulously designed to optimize efficiency and mitigate operational disruptions. By choosing SDA Global's heavy duty industrial equipment solutions, you can elevate your operations and overcome any challenges that come your way.
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
                        <div class="card-body bg-primary text-light d-lg-block">
                            <h5 class="card-title text-uppercase fs-4 mb-3">
                                <b class="fw-bold">HVAC</b>
                            </h5>
                            <p class="card-text small">
                                SDA Global provides HVAC solutions that not only reduce maintenance and lower energy costs but also ensure uninterrupted operations in a wide range of buildings. When you choose our supply of belt driven HVAC systems, you are choosing a solution that will help you decrease power consumption, minimize replacement costs, and eliminate the need for time-consuming maintenance tasks.
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
                        <div class="card-body bg-primary text-light d-lg-block">
                            <h5 class="card-title text-uppercase fs-4 mb-3">
                                <b class="fw-bold">LAWN, GARDEN & PROFESSIONAL LANDSCAPING</b>
                            </h5>
                            <p class="card-text small">
                                We understand the importance of reliable outdoor equipment when it comes to maintaining your yard. That is the reason why we work closely with top outdoor equipment manufacturers to provide suitable equipment for your garden. You can trust our products to perform optimally, minimizing any downtime during your yard work. Whether you need replacement parts or new accessories, our trusted partnership with leading manufacturers guarantees that you will find the perfect solution to beautify your garden.
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
                        <div class="card-body bg-primary text-light d-lg-block">
                            <h5 class="card-title text-uppercase fs-4 mb-3">
                                <b class="fw-bold">MACHINE TOOL & PRECISION EQUIPMENT</b>
                            </h5>
                            <p class="card-text small">
                                SDA Global has earned a prestigious reputation for its capability to enhance industrial applications by providing high-performance, high-precision power transmission solutions, along with safe and reliable hydraulic solutions. With unwavering precision, we persist in providing the market with suitable products. Our equipment applications seamlessly integrate attention to detail, ensuring accuracy in every aspect. Our solutions are crafted to cater to your unique requirements.
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
                        <div class="card-body bg-primary text-light d-lg-block">
                            <h5 class="card-title text-uppercase fs-4 mb-3">
                                <b class="fw-bold">micromobility</b>
                            </h5>
                            <p class="card-text small">
                                Our belts products are at the forefront of a revolution in personal and micromobility, changing the way people travel from point A to point B. Whether it's bicycles, electric bikes, electric motorcycles, or e-scooters, we provide the belt drive solutions and engineering support to swiftly turn your concept into a market-ready product.
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
                        <div class="card-body bg-primary text-light d-lg-block">
                            <h5 class="card-title text-uppercase fs-4 mb-3">
                                <b class="fw-bold">mining</b>
                            </h5>
                            <p class="card-text small">
                                In the global mining industry, operational challenges are the norm, but overcoming them is our specialty. SDA's mining solutions are designed to enhance your productivity, uptime, and safety, supported by our unmatched assistance and on-site services tailored to your mining operations. Our complete range of heavy-duty hydraulic hoses, couplings, and power transmission solutions are built to withstand the rigorous demands of your mining applications.
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
                        <div class="card-body bg-primary text-light d-lg-block">
                            <h5 class="card-title text-uppercase fs-4 mb-3">
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
                        <div class="card-body bg-primary text-light d-lg-block">
                            <h5 class="card-title text-uppercase fs-4 mb-3">
                                <b class="fw-bold">powersports</b>
                            </h5>
                            <p class="card-text small">
                                Hydraulic and power transmission systems play a crucial role in powersports, enhancing performance and efficiency in vehicles like ATVs, motorcycles, and snowmobiles. These systems ensure that powersports vehicles can handle diverse and challenging environments while maintaining high performance and reliability.
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
                        <div class="card-body bg-primary text-light d-lg-block">
                            <h5 class="card-title text-uppercase fs-4 mb-3">
                                <b class="fw-bold">truck & bus</b>
                            </h5>
                            <p class="card-text small">
                                We collaborate with the heavy-duty, commercial, and industrial vehicle sectors to provide belt drives, engine hoses, and system components that keep your business running smoothly, while reducing maintenance costs, downtime, and labor expenses.
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
