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
                            {{-- @if ($lang == 'en') --}}
                                Valid until : {{date('d M Y',strtotime($job->end_date))}}
                            {{-- @else
                                Berlaku Hingga : {{date('d M Y',strtotime($job->end_date))}}
                            @endif --}}
                        </p>
                    </div>
                    <div class="col-md-auto mb-2 order-md-2 mb-md-0 pr-md-0">
                        {{-- @if ($lang == 'en') --}}
                            <button class="btn btn-outline-success btn-block" data-bs-toggle="collapse" data-bs-target="#lowongan{{ $job->id }}">Qualification</button>
                        {{-- @else
                            <button class="btn btn-outline-success btn-block" data-toggle="collapse" data-target="#lowongan{{ $job->id }}">Kualifikasi</button>
                        @endif --}}
                    </div>
                    <div class="col-12 order-md-4">
                        <div class="collapse" id="lowongan{{ $job->id }}" data-bs-parent="#lowongan{{ $job->id }}">
                            <div class="pt-5">
                                {!! $job->description !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-auto order-md-3">
                        {{-- @if ($lang == 'en') --}}
                            <a href="#" class="btn btn-outline-dark btn-block">Apply</a>
                        {{-- @else
                            <a href="#" class="btn btn-outline-dark btn-block">Lamar</a>
                        @endif --}}
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

            {{-- <h3 class="">Saat ini kami tidak membuka lowongan pekerjaan</h3> --}}
        </div>
    </li>
@endif
