@extends('front/layout/layout')
@section('pageStyles')
    <style>
        .page-banner {
            background-position-x: 70%;
            background-image: linear-gradient(to top, white, transparent, transparent), url({{ asset('assets/img/contact/banner-contact.jpg') }})
        }

        @media (min-width: 992px) {
            .page-banner {
                background-image: url({{ asset('assets/img/karir/banner-karir.jpg') }})
            }
        }

        @media (min-width: 576px) {
            #column-address {
                max-width: 420px;
            }
        }

        body>main>section {
            margin-bottom: calc(2rem + 1.5vw);
        }

        .job-card {

            border: 1px solid #ccc;
            border-left: 5px solid maroon;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .job-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .job-location {
            color: #555;
            font-size: 14px;
        }

        /* .nav-tabs .nav-link.active {
                        color: #fff;
                        background-color: #a93226;
                        border-color: #a93226;
                    } */

        .nav-tabs .nav-link.active {
            border-bottom: 2px solid #a93226;
            border-color:none;
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
                                WORK
                                <br class="d-none d-lg-inline"><b class="fw-bold">WITH US</b>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-0 border-0 container">
        <h2 class="text-start fs-2 fs-lg-4 text-primary">Open Position All Position</h2>
    </section>

    <section class="pb-0 border-0 container">
        <ul class="nav nav-tabs mb-5 flex-nowrap" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link border-top-0 border-start-0 border-end-0 fw-bold text-decoration-none text-reset text-nowrap active" id="all-tab"
                    data-bs-toggle="tab" data-bs-target="#all-tab-pane" type="button" role="tab"
                    aria-controls="all-tab-pane" aria-selected="true">All Position</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link border-top-0 border-start-0 border-end-0 fw-bold text-decoration-none text-reset text-nowrap" id="marketing-tab"
                    data-bs-toggle="tab" data-bs-target="#marketing-tab-pane" type="button" role="tab"
                    aria-controls="marketing-tab-pane" aria-selected="false">Marketing</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link border-top-0 border-start-0 border-end-0 fw-bold text-decoration-none text-reset text-nowrap" id="web-tab"
                    data-bs-toggle="tab" data-bs-target="#web-tab-pane" type="button" role="tab"
                    aria-controls="web-tab-pane" aria-selected="false">Web Developer</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="all-tab-pane" role="tabpanel" aria-labelledby="all-tab"
                tabindex="0">
                <div class="nav flex-column" id="KualifikasiTab" role="tablist">
                    <div class="row row-cols-2 g-2 g-md-3 row-cols-lg-3 g-xl-3">
                        <div class="col nav-item mb-4">
                            <a class="nav-link active text-decoration-none text-black" id="pills-ecomm-tab-1"
                                data-bs-toggle="tab" data-bs-target="#pills-ecomm-1" role="tab"
                                aria-controls="pills-ecomm-1" aria-selected="true">
                                <div class="job-card">
                                    <div class="job-title">Senior Software Engineer</div>
                                    <div class="job-location">Semarang</div>
                                </div>
                            </a>
                        </div>
                        <div class="col nav-item mb-4">
                            <a class="nav-link  text-decoration-none text-black" id="pills-ecomm-tab-2" data-bs-toggle="tab"
                                data-bs-target="#pills-ecomm-2" role="tab" aria-controls="pills-ecomm-2"
                                aria-selected="true">
                                <div class="job-card">
                                    <div class="job-title">Senior Software Engineer</div>
                                    <div class="job-location">Semarang</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="marketing-tab-pane" role="tabpanel" aria-labelledby="marketing-tab"
                tabindex="0">
                <div class="row row-cols-2 g-2 g-md-3 row-cols-lg-3 g-xl-3">
                    <div class="col">
                        <div class="job-card">
                            <div class="job-title">Marketing and Sales Content</div>
                            <div class="job-location">Surabaya</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="job-card">
                            <div class="job-title">Senior Software Engineer</div>
                            <div class="job-location">Semarang</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="job-card">
                            <div class="job-title">Growth Marketer</div>
                            <div class="job-location">Cikarang</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="web-tab-pane" role="tabpanel" aria-labelledby="web-tab" tabindex="0">
                <div class="row row-cols-2 g-2 g-md-3 row-cols-lg-3 g-xl-3">
                    <div class="col">
                        <div class="job-card">
                            <div class="job-title">Marketing and Sales Content</div>
                            <div class="job-location">Surabaya</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="job-card">
                            <div class="job-title">Senior Software Engineer</div>
                            <div class="job-location">Semarang</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="job-card">
                            <div class="job-title">Growth Marketer</div>
                            <div class="job-location">Cikarang</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pb-0 border-0 container">
        <div class="col-12 col-lg-12">
            <div class="tab-content" id="KualifikasiTabContent">
                <div class="tab-pane show" id="pills-ecomm-1" role="tabpanel" aria-labelledby="pills-ecomm-1">
                    <div class="d-flex flex-column" style="justify-content: space-between;">
                        <div class="">
                            supresso
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="pills-ecomm-2" role="tabpanel" aria-labelledby="pills-ecomm-2">
                    <div class="d-flex flex-column" style="justify-content: space-between;">
                        <div class="">
                            indracostore
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
