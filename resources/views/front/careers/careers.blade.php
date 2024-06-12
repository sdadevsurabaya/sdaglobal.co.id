@extends('front/layout/layout')
@section('pageStyles')
<style>
    .page-wrapper>section {
        margin-bottom: 3em;
    }
</style>
@endsection
@section('content')
@include('front.careers.banner-careers')
<section>
    <div class="container">
        <p class="mb-5">
            Kami mencari talenta-talenta untuk pekerjaan yang sesuai dalam berbagai tingkatan organisasi. Proses
            rekrutmen dilakukan secara selektif agar mendapat calon karyawan terbaik. Berikut alur proses
            rekrutmen di SDA Indonesia mulai dari mengirimkan lamaran sampai ke tahap penerimaan karyawan.
        </p>
        <div class="row row-cols-2 gy-4 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 gy-xl-0 gx-xl-5">
            <div class="col text-center">
                <figure class="figure">
                    <img src="{{asset('assets/img/careers/ikon_tahap1.svg')}}" class="figure-img" width="90" height="auto" alt="">
                    <figcaption class="figure-caption">
                        <h5>
                            <span class="fs-2 fw-medium">1.</span>
                            <br><br class="d-none d-xl-inline">
                            <small>Aplikasi Masuk</small>
                        </h5>
                    </figcaption>
                </figure>
            </div>
            <div class="col text-center">
                <figure class="figure">
                    <img src="{{asset('assets/img/careers/ikon_tahap2.svg')}}" class="figure-img" width="90" height="auto" alt="">
                    <figcaption class="figure-caption">
                        <h5>
                            <span class="fs-2 fw-medium">2.</span>
                            <br><br class="d-none d-xl-inline">
                            <small>Tes Tertulis & Tes Keahlian</small>
                        </h5>
                    </figcaption>
                </figure>
            </div>
            <div class="col text-center">
                <figure class="figure">
                    <img src="{{asset('assets/img/careers/ikon_tahap3.svg')}}" class="figure-img" width="90" height="auto" alt="">
                    <figcaption class="figure-caption">
                        <h5>
                            <span class="fs-2 fw-medium">3.</span>
                            <br><br class="d-none d-xl-inline">
                            <small>Interview</small>
                        </h5>
                    </figcaption>
                </figure>
            </div>
            <div class="col text-center">
                <figure class="figure">
                    <img src="{{asset('assets/img/careers/ikon_tahap4.svg')}}" class="figure-img" width="90" height="auto" alt="">
                    <figcaption class="figure-caption">
                        <h5>
                            <span class="fs-2 fw-medium">4.</span>
                            <br><br class="d-none d-xl-inline">
                            <small>Medical Checkup</small>
                        </h5>
                    </figcaption>
                </figure>
            </div>
            <div class="col text-center">
                <figure class="figure">
                    <img src="{{asset('assets/img/careers/ikon_tahap5.svg')}}" class="figure-img" width="90" height="auto" alt="">
                    <figcaption class="figure-caption">
                        <h5>
                            <span class="fs-2 fw-medium">5.</span>
                            <br><br class="d-none d-xl-inline">
                            <small>Selamat Bergabung</small>
                        </h5>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <h2 class="fs-1 text-center fw-medium">Lowongan Pekerjaan</h2>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">

            <div class="col col-12">
                <div class="mb-5" id="search_lowongan">
                    <div class="row row-cols-1 gy-2 row-cols-md-2 gy-md-0 gx-md-4 gx-lg-5 mb-4">
                        <div class="col">
                            <div class="bg-white d-flex border border-secondary">
                                <input type="email" class="form-control bg-transparent border-0"
                                    placeholder="Cari Pekerjaan">
                                <button class="btn">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                        <div class="col">
                            <div class="bg-white d-flex border border-secondary">
                                <select name="" id="" class="form-select border-0">
                                    <option selected>-- Cari Sesuai Level Jabatan --</option>
                                    <option value="1">Worker</option>
                                    <option value="2">ASPR</option>
                                    <option value="3">Staff</option>
                                    <option value="4">Supervisor</option>
                                    <option value="5">Manager</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col col-12">
                <!-- ================= DAFTAR LOWONGAN ================= -->
                <ul class="list-group list-group-flush" id="daftar_lowongan">
                    @include('front.careers.lowongan-item')
                    @include('front.careers.lowongan-item')
                    @include('front.careers.lowongan-item')
                    @include('front.careers.lowongan-item')
                    @include('front.careers.lowongan-item')
                </ul>
            </div>

        </div>
    </div>
</section>
@endsection
@section('pageScripts')
<script>
    $('#nav-careers').addClass('active');
</script>
@endsection
