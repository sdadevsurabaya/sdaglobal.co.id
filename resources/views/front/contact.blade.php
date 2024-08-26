@extends('front/layout/layout')
@section('pageStyles')
<style>
    .page-banner {
        background-position-x: 70%;
        background-image: linear-gradient(to top, white, transparent, transparent), url({{asset('assets/img/contact/banner-contact.jpg')}})
    }

    @media (min-width: 992px) {
        .page-banner {
            background-image: url({{asset('assets/img/contact/banner-contact.jpg')}})
        }
    }

    @media (min-width: 576px) {
        #column-address {
            max-width: 420px;
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
                            CONTACT
                            <br class="d-none d-lg-inline"><b class="fw-bold">US</b>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <h5 class="fs-4 mb-4 d-none d-lg-block text-primary"><b class="fw-bold">Contact Us</b></h5>
        <div>
            <div class="row g-0 gap-5 justify-content-xl-between">
                <div class="col col-12 col-lg-7">
                    <form action="{{ route('contact.store') }}" method="POST" class="d-grid row-gap-2">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" name="nama" placeholder="Full Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-lg" name="email" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control form-control-lg" name="phone" placeholder="Contact Number">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" name="subject" placeholder="Email Subject">
                        </div>
                        <div class="form-group">
                            <textarea id="" cols="1" rows="10" class="form-control form-control-lg" name="pesan" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group pt-3">
                            <button type="submit" class="btn btn-lg bg-primary text-light w-100">Submit</button>
                        </div>
                    </form>
                </div>
                <div id="column-address" class="col col-12 col-sm-auto">
                    <h5 class="fs-4 mb-4"><b class="fw-bold">PT. SDA GLOBAL</b></h5>
                    <ul class="list-unstyled m-0 d-flex flex-column row-gap-4">
                        <li>
                            <h5 class="fs-6"><b class="fw-bold">Head Office</b></h5>
                            <p>
                                Jl. Margomulyo Indah 1A No. 7-8
                                <br>
                                Surabaya 60186, Jawa Timur - Indonesia
                                <br>
                                Telephone : <a href="telp:+62317482190" target="_blank">+62 31 748 2190</a>, <a href="tel:+62317482193" target="_blank">748 2193</a>
                            </p>
                        </li>
                        <li>
                            <h5 class="fs-6"><b class="fw-bold">Retail Store</b></h5>
                            <p>
                                Komp. Raden Saleh Permai Kav. 19-20
                                <br>
                                Jl. Raden Saleh No. 45
                                <br>
                                Surabaya 60174, Jawa Timur - Indonesia
                                <br>
                                Telephone : <a href="telp:+62315468800" target="_blank">+62 31 546 8800</a>, <a href="tel:+62315467700" target="_blank">5467700</a>
                            </p>
                        </li>
                        <li>
                            <img src="{{asset('assets/img/qrcode.svg')}}" width="100%" height="auto" style="max-width: 152px;" alt="">
                        </li>
                        <li>
                            <p>
                                Email : <a href="mailto:cs@sdaglobal.co.id" target="_blank">cs@sdaglobal.co.id</a>
                                <br>
                                Website : <a href="https://sdaglobal.co.id" target="_blank">sdaglobal.co.id</a>
                            </p>
                        </li>
                    </ul>
                </div>
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
