@extends('front/layout/layout')
@section('pageStyles')
<style></style>
@endsection
@section('content')
<section>
    <div class="page-banner" style="background-image: url({{asset('assets/img/contact/banner-contact.jpg')}})">
        <div class="container py-5">
            <div class="row row-cols-md-auto py-5">
                <div class="col py-5">
                    <div class="p-4 bg-primary text-light px-md-5">
                        <h5 class="display-4 text-center text-md-start">
                            CONTACT
                            <br><b class="fw-bold">US</b>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <h5 class="fs-4"><b class="fw-bold">Contact Us</b></h5>
        <div class="row row-cols-1 gy-5">
            <div class="col">
                
            </div>
            <div class="col">

            </div>
        </div>
    </div>
</section>
@endsection
@section('pageScripts')
<script>
    $('.nav-contact').addClass('active');
</script>
@endsection
