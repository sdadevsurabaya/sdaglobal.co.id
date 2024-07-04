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
        <h5 class="fs-4 mb-4"><b class="fw-bold">Contact Us</b></h5>
        <div class="row gy-5 gx-lg-5 justify-content-lg-between">
            <div class="col col-12 col-lg-6">
                <form action="{{ route('contact.store') }}" method="POST" class="d-grid row-gap-2">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="nama" placeholder="Full Name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="phone" placeholder="Contact Number">
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="1" rows="10" class="form-control" name="pesan" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group pt-3">
                        <button type="submit" class="btn btn-lg bg-primary text-light w-100">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col col-12 col-lg">
                <div class="row row-cols-1 gy-4">
                    <div class="col">
                        <h5 class="fs-5"><b class="fw-bold">Head Office</b></h5>
                        <p style="max-width: 535px">
                            Komp. Margomulyo Indah I Blok A No. 7-8 Jl. Margomulyo Indah I, Balongsari - Tandes, Surabaya 60186, Jawa Timur - Indonesia
                            <br>
                            Telephone : <a href="telp:+62317482190" target="_blank">+62 31 748 2190</a>, <a href="tel:+62317482193" target="_blank">748 2193</a>
                        </p>
                    </div>
                    <div class="col">
                        <h5 class="fs-5"><b class="fw-bold">Retail Store</b></h5>
                        <p style="max-width: 535px">
                            Komp. Raden Saleh Permai Kav. 19-20 Jl. Raden Saleh No. 45, Surabaya 60174, Jawa Timur - Indonesia
                            <br>
                            Telephone : <a href="telp:+62315468800" target="_blank">+62 31 546 8800</a>, <a href="tel:+62315467700" target="_blank">5467700</a>
                        </p>
                    </div>
                    <div class="col">
                        <img src="{{asset('assets/img/qrcode.svg')}}" width="100%" height="auto" style="max-width: 152px;" alt="">
                    </div>
                    <div class="col">
                        <p>
                            Email : <a href="mailto:cs@sdaglobal.co.id" target="_blank">cs@sdaglobal.co.id</a>
                            <br>
                            Website : <a href="https://sdaglobal.co.id" target="_blank">sdaglobal.co.id</a>
                        </p>
                    </div>
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
