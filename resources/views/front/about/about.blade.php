@extends('front/layout/layout')
@section('pageStyles')@endsection
@section('content')
<section style="background-image: url({{asset('assets/img/about/way-banner.png')}}); background-repeat: no-repeat; background-position: center; background-size: cover; padding: calc(5em + 2vw) 0;">
    <div class="container">
        <div class="row">
            <div class="col col-12 col-md-auto">
                <div class="caption bg-primary text-white py-5 px-4 px-md-5">
                    <h5 class="page-title display-3 text-center text-md-start">
                        ABOUT <br class="d-none d-lg-block"><b class="fw-bold">US</b>
                    </h5>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-lg-5">
    <div class="container mb-5">
        <p>
            SDA Global takes pride in its reputation as a reliable and customer-centric organization. Since our inception on June 2, 1992, we have remained committed to fulfilling our customers’ needs. Starting with hydraulic and pneumatic products, we expanded our portfolio to include industrial and commercial solutions. Our knowledgeable team offers friendly advice based on years of combined experience and friendly demeanor.
        </p>
    </div>
    <div class="container mb-5">
        <h5 class="mb-3"><b class="fw-bold">VISION STATEMENT</b></h5>
        <p>
            SDA Global aims to be the paragon of the value-added problem-solving instituition. We provide superior person-to-person individualized service to all our customers and prospects. Our vision is to be the go-to partner for industrial and commercial needs, offering personalized solutions that make a difference. Additionally, we envision expanding our reach through e-commerce, providing seamless online experiences for our valued clients.
        </p>
    </div>
    <div class="container">
        <h5 class="mb-3"><b class="fw-bold">MISSION STATEMENT</b></h5>
        <ul class="bullet-list d-grid row-gap-3">
            <li>Customer Satisfaction: We strive to understand our customers&apos; requirements thoroughly and deliver solutions that exceed their expectations.</li>
            <li>Quality Assurance: Our commitment to quality ensures that every product and service we offer meets the highest standards.</li>
            <li>Timeliness: We value your time. Our eficient processes and dedicated team ensure timely delivery.</li>
            <li>Competitive Edge: We stay ahead of the curve by ofering competitive pricing, innovative solutions supported by comprehensive inventory for the market.</li>
            <li>Mutual Success: We believe in fostering strong relationships with our valuable customers, trusted suppliers, prestigious corporation and the dynamic community.</li>
        </ul>
    </div>
</section>
<section>
    <div class="container">
        <ul class="list-unstyled m-0 d-grid row-gap-5">
            <li>
                <div class="row g-4 g-md-5">
                    <div class="col col-12 col-md-4 order-lg-2">
                        <img src="{{asset('assets/img/about/SOPHISTICATED-banner.png')}}" width="100%" height="auto" alt="">
                    </div>
                    <div class="col col-12 col-md-8 order-lg-1">
                        <h5 class="section-title fs-3 mb-3">
                            <b class="fw-bold">
                                SOPHISTICATED <br class="d-none d-lg-block">INFRASTRUCTURE
                            </b>
                        </h5>
                        <p>
                            Our robust and expansive warehouse empowers us to fulfill orders of any quantity, whether they are substantial or modest, regardless of the location. Our extensive dealer network ensures timely product delivery across the country. The dedication and expertise of our experienced staff have been instrumental in our remarkable success.
                        </p>
                    </div>
                </div>
            </li>
            <li>
                <div class="row g-4 g-md-5">
                    <div class="col col-12 col-md-4 order-lg-2">
                        <img src="{{asset('assets/img/about/COMPETITIVE-banner.png')}}" width="100%" height="auto" alt="">
                    </div>
                    <div class="col col-12 col-md-8 order-lg-1">
                        <h5 class="section-title fs-3 mb-3">
                            <b class="fw-bold">
                                COMPETITIVE <br class="d-none d-lg-block">STRENGTHS
                            </b>
                        </h5>
                        <p>
                            Technical Proficiency: Supported by a team of skilled and knowledgeable staff.
                            <br>Quality Assurance: Meeting customer requirements and industry standards consistently.
                            <br>Timely Deliveries: Ensuring products are delivered promptly every time.
                            <br>Afordable Pricing: Offering market-friendly prices that provide value for both clients and end users.
                        </p>
                    </div>
                </div>
            </li>
            <li>
                <div class="row g-4 g-md-5">
                    <div class="col col-12 col-md-4 order-lg-2">
                        <img src="{{asset('assets/img/about/CUSTOMERS-banner.png')}}" width="100%" height="auto" alt="">
                    </div>
                    <div class="col col-12 col-md-8 order-lg-1">
                        <h5 class="section-title fs-3 mb-3">
                            <b class="fw-bold">
                                CUSTOMERS' <br class="d-none d-lg-block">SATISFACTION
                            </b>
                        </h5>
                        <p>
                            Our dedicated professionals have built strong relationships with clients by consistently delivering an extensive range of economical, high-performing, durable, and safe industrial and commercial products. We prioritize customer satisfaction, actively seeking and valuing customer feedback. This input helps us enhance product quality while ensuring competitive pricing, ultimately bringing immense gratification to clients across Indonesia.
                        </p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
@endsection
@section('pageScripts')
<script>
    $('#nav-about').addClass('active');
</script>
@endsection
