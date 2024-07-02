@extends('front/layout/layout')
@section('pageStyles')@endsection
@section('content')
<section style="background-image: url({{asset('assets/img/contact/banner.jpg')}}); background-repeat: no-repeat; background-position: center; background-size: cover; padding: calc(5em + 2vw) 0;">
    <div class="container">
        <div class="row">
            <div class="col col-12 col-md-auto">
                <div class="caption bg-primary text-white py-5 px-4 px-md-5">
                    <h5 class="page-title display-3 text-center text-md-start">
                        CONTACT <br class="d-none d-lg-block"><b class="fw-bold">US</b>
                    </h5>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container py-lg-5">
        <div class="row g-5 justify-content-between">
            <div class="col col-12 col-lg-7">
                <form action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="">Name</label>
                            <input type="text" class="form-control" name="nama" placeholder="Your Full Name">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Email Address">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="">Contact</label>
                            <input type="number" class="form-control" name="phone" placeholder="Phone Number">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="">
                                Help us improve our services by sharing your experience
                            </label>
                            <textarea class="form-control" rows="10" name="pesan" placeholder=""></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg bg-primary text-white rounded-0 w-100">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col col-12 col-md-6 col-lg-5 col-xxl-4">
                <address class="d-grid row-gap-4">
                    <div>
                        <h5 class="section-title fs-4"><b class="fw-bold">Head Office</b></h5>
                        <p>
                            Komp. Margomulyo Indah I Blok A No. 7-8, Jl. Margomulyo Indah I, Balongsari - Tandes, Surabaya 60186, Jawa Timur - Indonesia
                            <br>
                            Telephone: +62 31 748 2190, 748 2193
                        </p>
                    </div>
                    <div>
                        <h5 class="section-title fs-4"><b class="fw-bold">Retail Store</b></h5>
                        <p>
                            Komp. Raden Saleh Permai Kav. 19-20, Jl. Raden Saleh No. 45, Surabaya 60174, Jawa Timur - Indonesia
                            <br>
                            Telephone: +62 31 546 8800, 546 7700
                        </p>
                    </div>
                    <div>
                        <p>
                            <img src="{{asset('assets/img/contact/qrcode.svg')}}" width="152" height="auto" alt="">
                        </p>
                        <p>
                            Email : <a href="mailto:cs@sdaglobal.co.id" target="_blank">cs@sdaglobal.co.id</a>
                            <br>
                            Website : <a href="{{route('landing')}}" target="_blank">sdaglobal.co.id</a>
                        </p>
                        <p class="fw-bold">
                            Hotline : <a href="tel:+623199008800" target="_blank">+62 31 9900 8800</a>
                            <br>
                            WA Only : <a href="https://wa.me/+6282280808800" target="_blank">+62 822 8080 8800</a>
                        </p>
                    </div>
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
