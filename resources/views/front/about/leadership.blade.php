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
    style="background-image: url({{asset('assets/img/about/leadership-banner.png')}}); background-repeat: no-repeat; background-position: center; background-size: cover; padding: calc(5em + 2vw) 0;">
    <div class="container d-flex">
        <div class="caption bg-primary text-white py-5 px-3 px-md-5">
            <h5 class="page-title display-3">
                SDA GLOBAL <br><b class="fw-bold">GROUP MANAGEMENT TEAM</b>
            </h5>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container py-5 d-grid g-7">
        <div class="row justify-content-center g-7">
            <div class="col col-auto">
                <div class="card card-user">
                    <div class="ratio ratio-1x1 bg-secondary-subtle">
                        <img src="{{asset('assets/img/about/user.png')}}" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body text-capitalize text-center">
                        <h5 class="card-title mb-3">
                            <b class="fw-bold">nama anggota</b>
                        </h5>
                        <p class="card-text">
                            jabatan
                            <br>
                            unit
                            <br>
                            area
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center g-7">
            <div class="col col-auto">
                <div class="card card-user">
                    <div class="ratio ratio-1x1 bg-secondary-subtle">
                        <img src="{{asset('assets/img/about/user.png')}}" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body text-capitalize text-center">
                        <h5 class="card-title mb-3">
                            <b class="fw-bold">nama anggota</b>
                        </h5>
                        <p class="card-text">
                            jabatan
                            <br>
                            unit
                            <br>
                            area
                        </p>
                    </div>
                </div>
            </div>
            <div class="col col-auto">
                <div class="card card-user">
                    <div class="ratio ratio-1x1 bg-secondary-subtle">
                        <img src="{{asset('assets/img/about/user.png')}}" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body text-capitalize text-center">
                        <h5 class="card-title mb-3">
                            <b class="fw-bold">nama anggota</b>
                        </h5>
                        <p class="card-text">
                            jabatan
                            <br>
                            unit
                            <br>
                            area
                        </p>
                    </div>
                </div>
            </div>
            <div class="col col-auto">
                <div class="card card-user">
                    <div class="ratio ratio-1x1 bg-secondary-subtle">
                        <img src="{{asset('assets/img/about/user.png')}}" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body text-capitalize text-center">
                        <h5 class="card-title mb-3">
                            <b class="fw-bold">nama anggota</b>
                        </h5>
                        <p class="card-text">
                            jabatan
                            <br>
                            unit
                            <br>
                            area
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
    $('#nav-about, #nav-leadership').addClass('active');
</script>
@endsection
