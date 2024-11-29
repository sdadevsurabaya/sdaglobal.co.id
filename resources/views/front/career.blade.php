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
                                CAREER
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-0  border-0 container">
        <h2 class="text-center">Job Vacancy</h2>
    </section>

    <section>
        <div class="container">

           <div class="row row-cols-1 row-cols-md-2">
              <div class="col mb-2 mb-md-0">
                   <input type="hidden" value="" name="lang" id="lang">
                   <form id="search_jobs" action="javascript:void(0)" method="POST" class="input-group bg-light" style="margin-right: -.5rem;">
                       @csrf
                       <input class="form-control bg-transparent border-0" type="search" name="search_jobs" id="search_jobs_input" placeholder="Search for Jobs" style="font-size: inherit;">
                       <button class="btn" type="submit">
                           <i class="bi icon-cari"></i>
                       </button>
                   </form>
              </div>

              <div class="col">
                   <select class="form-control w-100 bg-light border-0" name="search_level" id="search_level">
                       <option value="" selected>-- Search by Job Level --</option>
                       @foreach ($levels as $data)
                           <option value="{{ $data->id }}">{{ $data->title }}</option>
                       @endforeach
                   </select>
              </div>
           </div>

           <ul class="list-group list-group-flush leanding_lowongan">
               @if (count($res_job) != 0)
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
                                           Level : {{ $job->level->title}}
                                           <br>
                                           Valid until : {{date('d M Y',strtotime($job->end_date))}}
                                       </p>
                                   </div>
                                   <div class="col-md-auto mb-2 order-md-2 mb-md-0 pr-md-0">
                                      {{-- @if ($lang == 'en')  --}}
                                           <button class="btn btn-outline-success btn-block" data-bs-toggle="collapse" data-bs-target="#lowongan{{ $job->id }}">Qualification</button>
                                      {{-- @else --}}
                                           {{-- <button class="btn btn-outline-success btn-block" data-toggle="collapse" data-target="#lowongan{{ $job->id }}">Kualifikasi</button> --}}
                                      {{-- @endif --}}
                                   </div>
                                   <div class="col-12 order-md-4">
                                       <div class="collapse" id="lowongan{{ $job->id }}" data-bs-parent="#lowongan{{ $job->id }}">
                                           <div class="pt-5">
                                              {!! $job->description !!}
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-md-auto order-md-3">
                                       <a href="#" class="btn btn-outline-dark btn-block text-decoration-none">Apply</a>
                                   </div>
                               </div>
                           </li>
                        @endif
                    @endforeach
                @else
                   <li class="list-group-item px-0 py-5">
                       <div class="d-flex justify-content-center">
                           {{-- @if ($lang == 'en') --}}
                               <h3 class="">We currently do not have any job vacancies</h3>
                           {{-- @else
                               <h3 class="">Saat ini kami tidak membuka lowongan pekerjaan</h3>
                           @endif --}}
                       </div>
                   </li>
               @endif
           </ul>

           <ul class="list-group list-group-flush" id="lowongan">
               {{-- list jobs in public --}}
           </ul>
       </div>
    </section>

    @endsection
@section('pageScripts')
<script type="text/javascript">
    $(document).ready(function() {
        $('#nav-career').addClass('active');
        document.getElementById("search_jobs_input").value = "";

        // $.get(" {{url('show_jobs')}}", {}, function(data, status){
        //     $("#lowongan").html(data);
        // });

        // proses search jobs
        $('#search_jobs').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            var search_jobs = formData.get("search_jobs");
            var lang = $('#lang').val();
            let token   = $("meta[name='csrf-token']").attr("content");
            // console.log(lang);
            $.ajax({
                type: 'POST',
                url: "{{ url('show_jobs/search_jobs') }}",
                // data : formData,
                data: {
                    "search_jobs": search_jobs,
                    "lang": lang,
                    "_token": token,
                },
                cache: false,
                success:function(response){
                    if($.isEmptyObject(response.error)){
                        $("#lowongan").html(response);
                        document.getElementsByClassName('leanding_lowongan')[0].style.display = "none";
                    }
                }
            });
        });

        // proses search by level
        $('#search_level').change(function(e) {
            var val_level = $('#search_level').val();
            var lang = $('#lang').val();
            console.log(val_level);
            $.ajax({
                type: 'POST',
                url: "{{ url('show_jobs/search_level') }}",
                // data : formData,
                data: {
                    "val_level": val_level,
                    "lang": lang,
                },
                cache: false,
                success:function(response){
                    if($.isEmptyObject(response.error)){
                        $("#lowongan").html(response);
                        document.getElementsByClassName('leanding_lowongan')[0].style.display = "none";
                    }
                }
            });
        });
    });
</script>
@endsection
