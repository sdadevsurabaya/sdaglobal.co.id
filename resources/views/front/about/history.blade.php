@extends('front/layout/layout')
@section('pageStyles')@endsection
@section('content')
<section
    style="background-image: url({{asset('assets/img/about/history-banner.png')}}); background-repeat: no-repeat; background-position: center; background-size: cover; padding: calc(5em + 2vw) 0;">
    <div class="container d-flex">
        <div class="caption bg-primary text-white py-5 px-3 px-md-5">
            <h5 class="page-title display-3">
                OUR <br class="d-none d-lg-block"><b class="fw-bold">HISTORY</b>
            </h5>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container py-5">
        <p>
            SDA Global takes pride in its reputation as a reliable and customer-centric organization. Since our
            inception on June 2, 1992, we have remained committed to fulfilling our customers’ needs. Starting
            with
            hydraulic and pneumatic products, we expanded our portfolio to include industrial and commercial
            solutions. Our knowledgeable team offers friendly advice based on years of combined experience and
            friendly demeanor.
        </p>
    </div>
    <div class="container py-5">
        <h5 class="card-title mb-3">
            <b class="fw-bold">VISION STATEMENT</b>
        </h5>
        <p>
            SDA Global aims to be the paragon of the value-added problem-solving instituition. We provide
            superior
            person-to-person individualized service to all our customers and prospects. Our vision is to be the
            go-to
            partner for industrial and commercial needs, offering personalized solutions that make a difference.
            Additionally, we envision expanding our reach through e-commerce, providing seamless online
            experiences
            for our valued clients.
        </p>
    </div>
    <div class="container py-5">
        <h5 class="card-title mb-3">
            <b class="fw-bold">MISSION STATEMENT</b>
        </h5>
        <ul class="d-grid row-gap-3">
            <li>
                Customer Satisfaction: We strive to understand our customers&apos; requirements thoroughly
                and deliver solutions that exceed their expectations.
            </li>
            <li>
                Quality Assurance: Our commitment to quality ensures that every product and service we
                offer
                meets the highest standards.
            </li>
            <li>
                Timeliness: We value your time. Our eficient processes and dedicated team ensure timely
                delivery.
            </li>
            <li>
                Competitive Edge: We stay ahead of the curve by ofering competitive pricing, innovative
                solutions supported by comprehensive inventory for the market.
            </li>
            <li>
                Mutual Success: We believe in fostering strong relationships with our valuable customers,
                trusted suppliers, prestigious corporation and the dynamic community.
            </li>
        </ul>
    </div>
</section>
@endsection
@section('pageScripts')
<script>
    $('#nav-about, #nav-history').addClass('active');
</script>
@endsection
