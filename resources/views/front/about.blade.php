@extends('front/layout/layout')
@section('pageStyles')
<style>
    .page-wrapper>section {
        margin-bottom: 0;
        display: grid;
        grid-template-columns: 1fr;
        row-gap: 4em;
        padding: 4em 0;
    }

    .ratio {
        --bs-aspect-ratio: 100%;
    }

    @media (min-width: 576px) {
        .ratio {
            --bs-aspect-ratio: 60%;
        }
    }

    @media (min-width: 992px) {
        .img-mission,
        .img-infrastructure,
        .img-customer1 {
            position: relative
        }
    }

    @media (min-width: 992px) {
        .img-mission .ratio,
        .img-infrastructure .ratio {
            position: absolute;
            top: 0;
            left: 0;
        }
    }

    @media (min-width: 992px) {
        .img-mission .ratio {
            --bs-aspect-ratio: 230%;
            max-height: 720px;
        }
    }

    @media (min-width: 992px) {
        .img-infrastructure .ratio {
            --bs-aspect-ratio: 125%;
            max-height: 420px;
        }
    }

    @media (min-width: 992px) {
        .img-customer1 .ratio {
            position: absolute;
            left: 0;
            bottom: 0;
        }
    }

    @media (min-width: 992px) {
        .img-customer1 .ratio {
            --bs-aspect-ratio: 125%;
            max-height: 420px;
        }
    }

    @media (min-width: 992px) {
        .page-wrapper>section:nth-child(3) {
            padding-bottom: 6em;
        }
    }

    @media (min-width: 992px) {
        .page-wrapper>section:nth-child(4) {
            padding-top: 6em;
        }
    }

    .page-banner {
        background-image: linear-gradient(to top, rgb(var(--color-primary-rgb)), transparent), url({{asset('assets/img/industries/banner-industries.jpg')}});
    }

    @media (min-width: 992px) {
        .page-banner {
            background-image: url({{asset('assets/img/about/banner-about.jpg')}});
        }
    }
</style>
@endsection
@section('content')
<section class="p-0">
    <div class="page-banner py-5">
        <div class="container py-5">
            <div class="row row-cols-md-auto py-5">
                <div class="col py-5">
                    <div class="p-4 bg-primary text-light px-md-5">
                        <h5 class="display-4 text-center text-md-start">
                            ABOUT
                            <br><b class="fw-bold">SDA</b>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-primary text-light">
    <div class="container">
        <p>
            SDA Global takes pride in its reputation as a reliable and customer-centric organization. Since our inception on June 2, 1992, we have remained committed to fulfilling our customers' needs. Starting with hydraulic and pneumatic products, we expanded our portfolio to include industrial and commercial solutions. Our knowledgeable team offers friendly advice based on years of combined experience and friendly demeanor.
        </p>
    </div>
    <div class="container">
        <div class="row gy-4 gy-lg-0 gx-lg-5">
            <div class="col col-12 col-lg-5 order-lg-2">
                <div class="img-mission">
                    <div class="ratio">
                        <img src="{{asset('assets/img/about/img-mission.jpg')}}" class="object-fit-cover" alt="">
                    </div>
                </div>
            </div>
            <div class="col col-12 col-lg-7 order-lg-1">
                <h5 class="page-title">
                    <b class="fw-bold">MISSION</b> <br class="d-none d-lg-block">STATEMENT
                </h5>
                <ul>
                    <li>Customer Satisfaction: We strive to understand our customers' requirements thoroughly and deliver solutions that exceed their expectations.</li>
                    <li>Quality Assurance: Our commitment to quality ensures that every product and service we offer meets the highest standards.</li>
                    <li>Timeliness: We value your time. Our efficient processes and dedicated team ensure timely delivery.</li>
                    <li>Competitive Edge: We stay ahead of the curve by offering competitive pricing, innovative solutions supported by comprehensive inventory for the market.</li>
                    <li>Mutual Success: We believe in fostering strong relationships with our valuable customers, trusted suppliers, prestigious corporation and the dynamic community.</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <h5 class="page-title text-primary">
            <b class="fw-bold">VISION</b> <br class="d-none d-lg-block">STATEMENT
        </h5>
        <p>
            SDA Global aims to be the paragon of the value-added problem-solving instituition. We provide superior person-to-person individualized service to all our customers and prospects. Our vision is to be the go-to partner for industrial and commercial needs, offering personalized solutions that make a difference. Additionally, we envision expanding our reach through e-commerce, providing seamless online experiences for our valued clients.
        </p>
    </div>
    <div class="container">
        <div class="row gy-4 gy-lg-0 gx-lg-5">
            <div class="col col-12 col-lg-5">
                <div class="img-infrastructure">
                    <div class="ratio">
                        <img src="{{asset('assets/img/about/img-sophisticated.jpg')}}" class="object-fit-cover" alt="">
                    </div>
                </div>
            </div>
            <div class="col col-12 col-lg-7">
                <h5 class="display-5 mb-3 text-primary">
                    <b class="fw-bold">SOPHISTICATED <br class="d-none d-lg-block">INFRASTRUCTURE</b>
                </h5>
                <p>
                    Our robust and expansive warehouse empowers us to fulfill orders of any quantity, whether they are substantial or modest, regardless of the location. Our extensive dealer network ensures timely product delivery across the country. The dedication and expertise of our experienced staff have been instrumental in our remarkable success.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="bg-primary text-light">
    <div class="container">
        <div class="row gy-4 gy-lg-0 gx-lg-5">
            <div class="col col-12 col-lg-5 order-lg-2">
                <div class="img-customer1 h-100">
                    <div class="ratio">
                        <img src="{{asset('assets/img/about/img-competitive.jpg')}}" class="object-fit-cover" alt="">
                    </div>
                </div>
            </div>
            <div class="col col-12 col-lg-7 order-lg-1">
                <h5 class="display-5 mb-3">
                    <b class="fw-bold">COMPETITIVE <br class="d-none d-lg-block">STRENGTHS</b>
                </h5>
                <p>
                    Technical Proficiency: Supported by a team of skilled and knowledgeable staff. Quality Assurance: Meeting customer
                    requirements and industry standards consistently.
                    <br>
                    Timely Deliveries: Ensuring products are delivered promptly every time. Affordable Pricing: Offering market-friendly
                    prices that provide value for both clients and end users.
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row gy-4 gy-lg-0 gx-lg-5">
            <div class="col col-12 col-lg-5 order-lg-2">
                <div class="ratio img-customer2">
                    <img src="{{asset('assets/img/about/img-customers.jpg')}}" class="object-fit-cover" alt="">
                </div>
            </div>
            <div class="col col-12 col-lg-7 order-lg-1">
                <h5 class="display-5 mb-3">
                    <b class="fw-bold">CUSTOMERS' <br class="d-none d-lg-block">SATISFACTION</b>
                </h5>
                <p>
                    Our dedicated professionals have built strong relationships with clients by consistently delivering an extensive range of economical, high-performing, durable, and safe industrial and commercial products. We prioritize customer satisfaction, actively seeking and valuing customer feedback. This input helps us enhance product quality while ensuring competitive pricing, ultimately bringing immense gratification to clients across Indonesia.
                </p>
            </div>
        </div>
    </div>
</section>
<section></section>
@endsection
@section('pageScripts')
<script>
    $('.nav-about').addClass('active');
</script>
@endsection
