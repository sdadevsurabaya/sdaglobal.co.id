@extends('front/layout/layout')
@section('pageStyles')
<style>
    .page-wrapper>section {
        margin-bottom: 0;
        display: grid;
        grid-template-columns: 1fr;
        row-gap: 4em;
        padding: 4em 0;
    }

    .ratio {
        --bs-aspect-ratio: 100%;
    }

    @media (min-width: 576px) {
        .ratio {
            --bs-aspect-ratio: 60%;
        }
    }

    @media (min-width: 992px) {
        .img-mission,
        .img-mission .ratio {
            height: 100%;
        }

        .img-mission .ratio {
            --bs-aspect-ratio: unset;
        }
    }

    @media (min-width: 992px) {
        .img-infrastructure,
        .img-customer1 {
            position: relative
        }
    }

    @media (min-width: 992px) {
        .img-infrastructure .ratio {
            position: absolute;
            top: 0;
            left: 0;
        }
    }

    @media (min-width: 992px) {
        .img-infrastructure .ratio {
            --bs-aspect-ratio: 125%;
            max-height: 420px;
        }
    }

    @media (min-width: 992px) {
        .img-customer1 .ratio {
            position: absolute;
            left: 0;
            bottom: 0;
        }
    }

    @media (min-width: 992px) {
        .img-customer1 .ratio {
            --bs-aspect-ratio: 125%;
            max-height: 420px;
        }
    }

    @media (min-width: 992px) {
        .page-wrapper>section:nth-child(3) {
            padding-bottom: 6em !important;
        }
    }

    @media (min-width: 992px) {
        .page-wrapper>section:nth-child(4) {
            padding-top: 6em;
        }
    }

    .page-banner {
        background-image: linear-gradient(to top, rgb(var(--color-primary-rgb)), transparent, transparent), url({{asset('assets/img/about/banner-about.jpg')}});
    }

    @media (min-width: 992px) {
        .page-banner {
            background-image: url({{asset('assets/img/about/banner-about.jpg')}});
        }
    }

    .page-wrapper>section:nth-child(2) {
        padding-bottom: 0 !important;
    }
</style>
@endsection
@section('content')
<section class="p-0">
    <div class="page-banner">
        <div class="container h-100">
            <div class="row row-cols-lg-auto h-100 align-items-end align-items-lg-center">
                <div class="col py-5">
                    <div class="p-4 bg-lg-primary text-light px-md-5">
                        <h5 class="display-3 text-center text-lg-start">
                            TENTANG
                            <br class="d-none d-lg-inline"><b class="fw-bold">SDA</b>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-primary text-light">
    <div class="container">
        <p>
            SDA Global bangga dengan prinsip organisasi yang mengedepankan pengalaman terbaik bagi pelanggan. Sejak didirikan pada 2 Juni 1992, kami terus berkomitmen memenuhi kebutuhan para pelanggan kami dengan baik. Dimulai dengan produk-produk hidraulik dan pneumatik, portofolio kami terus berkembang meliputi berbagai solusi industrial. Tim berwawasan teknis dengan keramahan yang khas siap melayani setiap kebutuhan Anda.
        </p>
    </div>
    <div class="container">
        <div class="row gy-4 gy-lg-0 gx-lg-5 justify-content-xl-between">
            <div class="col col-12 col-lg-5 order-lg-2">
                <div class="img-mission">
                    <div class="ratio">
                        <img src="{{asset('assets/img/about/img-mission.jpg')}}" class="object-fit-cover" alt="">
                    </div>
                </div>
            </div>
            <div class="col col-12 col-lg-7 col-xl-6 order-lg-1" style="padding-bottom: 4em;">
                <h5 class="page-title">
                    <b class="fw-bold">MISI</b> <br class="d-none d-lg-block">KAMI
                </h5>
                <ul class="list-unstyled d-flex flex-column row-gap-3">
                    <li>
                        <b class="fw-bold fs-5">Kepuasan Pelanggan</b>
                        <br>
                        Kami terus memahami kebutuhan pelanggan secara cermat guna memberikan solusi paling tepat.
                    </li>
                    <li>
                        <b class="fw-bold fs-5">Penjaminan Mutu</b>
                        <br>
                        Komitmen kami memastikan kualitas setiap produk dan pelayanan memenuhi standar tinggi.
                    </li>
                    <li>
                        <b class="fw-bold fs-5">Menghargai Waktu</b>
                        <br>
                        Kami menghargai waktu Anda. Proses kami sangat efisien guna menjamin semua proses pelayanan lebih cepat dan tepat.
                    </li>
                    <li>
                        <b class="fw-bold fs-5">Keunggulan Kompetitif</b>
                        <br>
                        Kami unggul dalam hal harga, inovasi solusi, serta pelayanan didukung oleh sistem inventori yang lengkap.
                    </li>
                    <li>
                        <b class="fw-bold fs-5">Sukses Bersama</b>
                        <br>
                        Kami percaya sukses berawal dari hubungan baik yang dipupuk dengan pelanggan, penyalur, korporasi, serta masyarakat luas yang dinamis.
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <h5 class="page-title text-primary">
            <b class="fw-bold">VISI</b> <br class="d-none d-lg-block">KAMI
        </h5>
        <p>
            SDA Global hadir menjadi pemimpin industri yang menyediakan solusi. Kami menyediakan layanan guna memenuhi kebutuhan khusus setiap pelanggan dan prospek. Visi kami adalah menjadi rekan utama pemenuhan kebutuhan industri, dengan solusi jitu bagi setiap pelanggan. Kami juga memperluas cakupan pasar kami lewat e-commerce dan melayani pelanggan lebih banyak lagi.
        </p>
    </div>
    <div class="container">
        <div class="row gy-4 gy-lg-0 gx-lg-5">
            <div class="col col-12 col-lg-5">
                <div class="img-infrastructure">
                    <div class="ratio">
                        <img src="{{asset('assets/img/about/img-sophisticated.jpg')}}" class="object-fit-cover" alt="">
                    </div>
                </div>
            </div>
            <div class="col col-12 col-lg-7">
                <h5 class="display-5 mb-3 text-primary">
                    INFRASTRUKTUR <br class="d-none d-lg-block"><b class="fw-bold">CANGGIH</b>
                </h5>
                <p>
                    Jaringan gudang dan galeri toko kami menyokong pemenuhan pesanan dan konsultasi dalam berbagai skala dan jumlah, tanpa batasan lokasi. Jaringan dealer dan distributor juga memastikan penyaluran produk tepat waktu ke semua daerah. Tim berpengalaman kami memastikan sistem pelayanan ini bekerja dengan baik dengan tingkat keberhasilan yang tinggi.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="bg-primary text-light">
    <div class="container">
        <div class="row gy-4 gy-lg-0 gx-lg-5">
            <div class="col col-12 col-lg-5 order-lg-2">
                <div class="img-customer1 h-100">
                    <div class="ratio">
                        <img src="{{asset('assets/img/about/img-competitive.jpg')}}" class="object-fit-cover" alt="">
                    </div>
                </div>
            </div>
            <div class="col col-12 col-lg-7 order-lg-1">
                <h5 class="display-5 mb-3">
                    KEUNGGULAN <br class="d-none d-lg-block"><b class="fw-bold">KOMPETITIF</b>
                </h5>
                <ul class="list-unstyled d-flex flex-column row-gap-3">
                    <li>
                        <b class="fw-bold fs-5">Keahlian Teknis</b>
                        <br>
                        Didukung oleh tim ahli dan berwawasan di bidangnya.
                    </li>
                    <li>
                        <b class="fw-bold fs-5">Penjaminan Mutu</b>
                        <br>
                        Konsisten memenuhi kebutuhan konsumen dan standar industri yang semakin tinggi.
                    </li>
                    <li>
                        <b class="fw-bold fs-5">Pelayanan Tepat Waktu</b>
                        <br>
                        Memastikan produk disediakan dan disalurkan secara cepat dan tepat.
                    </li>
                    <li>
                        <b class="fw-bold fs-5">Harga Terjangkau</b>
                        <br>
                        Menawarkan harga yang ramah dengan nilai terbaik bagi pelanggan dan pengguna.
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row gy-4 gy-lg-0 gx-lg-5">
            <div class="col col-12 col-lg-5 order-lg-2">
                <div class="ratio img-customer2">
                    <img src="{{asset('assets/img/about/img-customers.jpg')}}" class="object-fit-cover" alt="">
                </div>
            </div>
            <div class="col col-12 col-lg-7 order-lg-1">
                <h5 class="display-5 mb-3">
                    KEPUASAN <br class="d-none d-lg-block"><b class="fw-bold">PELANGGAN</b>
                </h5>
                <p>
                    Tim profesional kami senantiasa membangun hubungan baik dengan konsumen guna memenuhi kebutuhan produk dan layanan yang terbaik, andal, dan tepat guna. Kami mengutamakan kepuasan pelanggan, juga senantiasa menerima masukan, kritik, dan saran. Ini membantu kami terus menyediakan kualitas terbaik, juga pelayanan yang memuaskan di seluruh wilayah operasional kami.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="p-0">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col col-12 col-lg-4">
                <div class="cctv">
                    <div class="row g-0">
                        <div class="col">
                            <img src="{{asset('assets/img/about/tri-1.jpg')}}" width="100%" height="auto" alt="">
                        </div>
                        <div class="col">
                            <img src="{{asset('assets/img/about/tri-2.jpg')}}" width="100%" height="auto" alt="">
                        </div>
                        <div class="col">
                            <img src="{{asset('assets/img/about/tri-3.jpg')}}" width="100%" height="auto" alt="">
                        </div>
                    </div>
                    <img src="{{asset('assets/img/about/mesin-press.jpg')}}" width="100%" height="auto" alt="">
                </div>
            </div>
            <div class="col col-12 col-lg-8">
                <div class="container-fluid container-sm-fluid py-5 px-sm-5">
                    <div class="row g-0 align-items-center">
                        <div class="col col-12 col-sm-8">
                            <h5 class="display-5 mb-3 text-primary">
                                LAYANAN <br class="d-none d-lg-block"><b class="fw-bold">TEKNIK PRESISI</b>
                            </h5>
                            <p>
                                Kami juga menyediakan solusi komplit untuk kebutuhan alat atau suku cadang presisi. Mekanik berkeahlian khusus membantu Anda membuat dan menguji alat-alat presisi ini menggunakan teknologi tercanggih.
                            </p>
                        </div>
                        <div class="col col-12 col-sm-4">
                            <img src="{{asset('assets/img/about/mur-baut.jpg')}}" width="100%" height="auto" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('pageScripts')
<script>
    $('.nav-about').addClass('active');
</script>
@endsection
