@extends('front/layout/layout')
@section('pageStyles')
<style>
    section {
        display:
        padding-top: calc(4rem + 1.5vw);
        margin-bottom: calc(4rem + 1.5vw);
    }
</style>
@endsection
@section('content')
<section class="mb-0">
    <div class="page-banner py-5" style="background-image: url({{asset('assets/img/industries/banner-industries.jpg')}})">
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
<section class="mb-0 bg-primary text-light">
    <div class="inner-section">
        <div class="container">
            <p>
                SDA Global takes pride in its reputation as a reliable and customer-centric organization. Since our inception on June 2, 1992, we have remained committed to fulfilling our customers' needs. Starting with hydraulic and pneumatic products, we expanded our portfolio to include industrial and commercial solutions. Our knowledgeable team offers friendly advice based on years of combined experience and friendly demeanor.
            </p>
        </div>
    </div>
    <div class="inner-section">
        <div class="container">
            <div class="row">
                <div class="col">
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
                <div class="col">
                    <div class="ratio ratio-1x1 img-mission">
                        <img src="{{asset('assets/img/about/img-mission.jpg')}}" class="object-fit-cover" alt="">
                    </div>
                </div>
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
