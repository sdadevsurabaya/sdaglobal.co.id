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

    {{-- <section class="p-0 border-0">

        <!-- banner -->
        <script src="{{ url('/') }}/js/karir-banner.js"></script>
        <style>
            .banner>.jumbotron.mb-5 {
                margin-bottom: 2rem !important;
            }
            #lowongan .btn {
                min-width: 152px;
            }
        </style>

        <div class="container">
            <p class="mb-4">
                Kami mencari talenta-talenta untuk pekerjaan yang sesuai dalam berbagai tingkatan organisasi. Proses
                rekrutmen dilakukan secara selektif agar mendapat calon karyawan terbaik. Berikut alur proses rekrutmen
                di INDRACO GLOBAL INDONESIA mulai dari mengirimkan lamaran sampai ke tahap penerimaan karyawan.
            </p>

            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5">
                <div class="col">
                    <div class="text-center">
                        <img loading="lazy" src="{{ url('/') }}/img/karir/ikon-tahap1.svg" height="auto" class="w-50" alt="">
                    </div>
                    <p class="text-center helvetica-medium mb-5 mb-lg-0">
                        1.<br>Aplikasi Masuk
                    </p>
                </div>
                <div class="col">
                    <div class="text-center">
                        <img loading="lazy" src="{{ url('/') }}/img/karir/ikon-tahap2.svg" height="auto" class="w-50" alt="">
                    </div>
                    <p class="text-center helvetica-medium mb-5 mb-lg-0">
                        2.<br>Tes Tertulis & Tes Keahlian
                    </p>
                </div>
                <div class="col">
                    <div class="text-center">
                        <img loading="lazy" src="{{ url('/') }}/img/karir/ikon-tahap3.svg" height="auto" class="w-50" alt="">
                    </div>
                    <p class="text-center helvetica-medium mb-5 mb-lg-0">
                        3.<br>Interview
                    </p>
                </div>
                <div class="col">
                    <div class="text-center">
                        <img loading="lazy" src="{{ url('/') }}/img/karir/ikon-tahap4.svg" height="auto" class="w-50" alt="">
                    </div>
                    <p class="text-center helvetica-medium mb-5 mb-md-0">
                        4.<br>Medical Checkup
                    </p>
                </div>
                <div class="col">
                    <div class="text-center">
                        <img loading="lazy" src="{{ url('/') }}/img/karir/ikon-tahap5.svg" height="auto" class="w-50" alt="">
                    </div>
                    <p class="text-center helvetica-medium mb-0">
                        5.<br>Selamat Bergabung
                    </p>
                </div>
            </div>
        </div>

    </section> --}}

    <section class="p-0">
        <div class="page-banner">
            <div class="container h-100">
                <div class="row row-cols-lg-auto h-100 align-items-end align-items-lg-center">
                    <div class="col py-5">
                        <div class="p-4 bg-lg-primary text-primary text-lg-light px-md-5">
                            <h5 class="display-3 text-center text-lg-start">
                                CAREER
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-0  border-0 container">
        <h2 class="text-center">Lowongan Pekerjaan</h2>
    </section>

    <section>
        <div class="container">

           <div class="row row-cols-1 row-cols-md-2">
              <div class="col mb-2 mb-md-0">
                   <input type="hidden" value="" name="lang" id="lang">
                   <form id="search_jobs" action="javascript:void(0)" method="POST" class="input-group bg-light" style="margin-right: -.5rem;">
                       @csrf
                       <input class="form-control bg-transparent border-0" type="search" name="search_jobs" id="search_jobs_input" placeholder="Cari Pekerjaan" style="font-size: inherit;">
                       <button class="btn" type="submit">
                           <i class="bi icon-cari"></i>
                       </button>
                   </form>
              </div>

              <div class="col">
                   <select class="form-control w-100 bg-light border-0" name="search_level" id="search_level">
                       <option value="" selected>-- Cari Sesuai Level Jabatan --</option>
                       {{-- @foreach ($getLevel as $data)
                           <option value="{{ $data->id }}">{{ $data->title }}</option>
                       @endforeach --}}
                   </select>
              </div>
           </div>

           <ul class="list-group list-group-flush leanding_lowongan">
               {{-- @if (count($res_job) != 0)
                   @foreach ($res_job as $job)
                       <!-- lowongan item -->
                       @if ($job->status == "Open")
                           @php
                               date_default_timezone_set('Asia/Jakarta');
                           @endphp

                           <li class="list-group-item px-0 py-5">
                               <div class="row align-items-md-center ">
                                   <div class="col-md order-md-1">
                                       <h2 class="mb-2">{{ $job->title }}</h2>
                                       <p class="mb-3 mb-md-0 small text-black-50">
                                           Level : {{ $job->title_level}}
                                           <br>
                                           Berlaku Hingga : {{date('d M Y',strtotime($job->end_date))}}
                                       </p>
                                   </div>
                                   <div class="col-md-auto mb-2 order-md-2 mb-md-0 pr-md-0">
                                       @if ($lang == 'en')
                                           <button class="btn btn-outline-success btn-block" data-toggle="collapse" data-target="#lowongan{{ $job->id }}">Qualification</button>
                                       @else
                                           <button class="btn btn-outline-success btn-block" data-toggle="collapse" data-target="#lowongan{{ $job->id }}">Kualifikasi</button>
                                       @endif
                                   </div>
                                   <div class="col-12 order-md-4">
                                       <div class="collapse" id="lowongan{{ $job->id }}" data-parent="#lowongan{{ $job->id }}">
                                           <div class="pt-5">
                                               {!! $job->description !!}
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-md-auto order-md-3">
                                       <a href="{{ route('home.identitas', $job->id.'?lang='.$lang) }}" class="btn btn-outline-dark btn-block">Lamar</a>
                                   </div>
                               </div>
                           </li>
                       @endif
                   @endforeach
               @else
                   <li class="list-group-item px-0 py-5">
                       <div class="d-flex justify-content-center">
                           @if ($lang == 'en')
                               <h3 class="">We currently do not have any job vacancies</h3>
                           @else
                               <h3 class="">Saat ini kami tidak membuka lowongan pekerjaan</h3>
                           @endif
                       </div>
                   </li>
               @endif --}}
           </ul>

           <ul class="list-group list-group-flush" id="lowongan">
               {{-- list jobs in public --}}
           </ul>
       </div>
    </section>

    @endsection
@section('pageScripts')
<script>
    $('.nav-career').addClass('active');
</script>
@endsection
