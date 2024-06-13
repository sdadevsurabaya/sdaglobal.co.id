@extends('front/layout/layout')
@section('pageStyles')@endsection
@section('content')
<section
    style="background-image: url({{asset('assets/img/contact/banner.jpg')}}); background-repeat: no-repeat; background-position: center; background-size: cover; padding: calc(5em + 2vw) 0;">
    <div class="container d-flex">
        <div class="caption bg-primary text-white p-5">
            <h5 class="page-title display-3">
                CONTACT <br class="d-none d-lg-block"><b class="fw-bold">US</b>
            </h5>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container py-5">
        <h5 class="section-title fs-3 mb-5">
            <b class="fw-bold">Contact Us</b>
        </h5>
        <div class="row g-5">
            <div class="col col-12 col-lg-6 col-xl-7">
                <form action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" name="nama" placeholder="Name">
                    </div>
                    <div class="form-group mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email Address">
                    </div>
                    <div class="form-group mb-3">
                        <input type="number" class="form-control" name="phone" placeholder="Contact Number">
                    </div>
                    <div class="form-group mb-3">
                        <textarea class="form-control" rows="10" name="pesan" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-lg bg-primary text-white rounded-0 w-100">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
            <div class="col col-12 col-lg-6 col-xl-5">
                <address>
                    <p>
                        Komp. Margomulyo Indah I Blok A No. 7-8, Jl. Margomulyo Indah I, Balongsari - Tandes,
                        Surabaya
                        60186, Jawa Timur - Indonesia
                        <br>
                        Telephone: +62 31 748 2190, 748 2193
                    </p>
                    <p>
                        Komp. Raden Saleh Permai Kav. 19-20, Jl. Raden Saleh No. 45, Surabaya 60174, Jawa Timur
                        -
                        Indonesia
                        <br>
                        Telephone: +62 31 546 8800, 546 7700
                    </p>
                    <p>
                        <img src="{{asset('assets/img/contact/qrcode.svg')}}" width="152" height="auto" alt="">
                    </p>
                    <p>
                        Email : <a href="#" target="_blank">cs@sdaglobal.co.id</a>
                        <br>
                        Website : <a href="#" target="_blank">sdaglobal.co.id</a>
                    </p>
                    <p class="fw-bold">
                        Hotline : <a href="#" target="_blank">+62 31 546 8800</a>
                        <br>
                        WA Only : <a href="#" target="_blank">+62 822 8080 8800</a>
                    </p>
                </address>
            </div>
        </div>
    </div>
</section>
@endsection
@section('pageScripts')
<script>
    $('#nav-contact').addClass('active');
</script>
@endsection
