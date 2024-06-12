@extends('front/layout/layout')
@section('pageStyles')
<style>
    .card-user {
        width: 210px;
        border-radius: 0;
        border-width: 0;
    }

    .card-user .card-body {
        padding-left: 0;
        padding-right: 0;
    }
</style>
@endsection
@section('content')
<section
    style="background-image: url({{asset('assets/img/about/way-banner.png')}}); background-repeat: no-repeat; background-position: center; background-size: cover; padding: calc(5em + 2vw) 0;">
    <div class="container d-flex">
        <div class="caption bg-primary text-white py-5 px-3 px-md-5">
            <h5 class="page-title display-3">
                THE <br><b class="fw-bold">SDA WAY</b>
            </h5>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container py-5">
        <ul class="list-unstyled m-0 d-grid row-gap-5">
            <li>
                <div class="row g-4 g-md-5">
                    <div class="col col-12 col-md-4 order-lg-2">
                        <img src="{{asset('assets/img/about/SOPHISTICATED-banner.png')}}" width="100%" height="auto" alt="">
                    </div>
                    <div class="col col-12 col-md-8 order-lg-1">
                        <h5 class="section-title fs-3 mb-3">
                            <b class="fw-bold">
                                SOPHISTICATED <br class="d-none d-lg-block">INFRACTRUCTURE
                            </b>
                        </h5>
                        <p>
                            Our robust and expansive warehouse empowers us to fulfill orders of any quantity,
                            whether
                            they are substantial or modest, regardless of the location. Our extensive dealer
                            network
                            ensures timely product delivery across the country. The dedication and expertise of
                            our
                            experienced staff have been instrumental in our remarkable success.
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
                            Quality
                            Assurance: Meeting customer requirements and industry standards consistently.
                            <br>
                            Timely Deliveries: Ensuring products are delivered promptly every time. Afordable
                            Pricing:
                            Offering market-friendly prices that provide value for both clients and end users.
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
                            Our dedicated professionals have built strong relationships with clients by
                            consistently
                            delivering an extensive range of economical, high-performing, durable, and safe
                            industrial
                            and commercial products. We prioritize customer satisfaction, actively seeking and
                            valuing
                            customer feedback. This input helps us enhance product quality while ensuring
                            competitive
                            pricing, ultimately bringing immense gratification to clients across Indonesia.
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
    $('#nav-about, #nav-sda-way').addClass('active');
</script>
@endsection
