@extends('back/layouts/main_admin')

@section('area')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    Post Vacancies
                </h3>
            </div>

            {{-- konten --}}
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-gradient-primary btn-fw btn-icon-text" data-toggle="modal" data-target="#ModalJob">
                        <i class="mdi mdi-library-plus"></i> Add New Vacancies
                    </button>
                </div>
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Posisi Vacancies</th>
                                            <th>Level</th>
                                            <th>Status</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($ListVacancies as $key => $ListVacancie)
                                            <tr>
                                                <td>{{$no++}}</td>
                                                <td>{{ $ListVacancie->title }}</td>
                                                <td>{{ $ListVacancie->level->title }}</td>
                                                <td>
                                                    @php
                                                        date_default_timezone_set('Asia/Jakarta');
                                                    @endphp
                                                    @if ($ListVacancie->status == "Open")
                                                        @if ($ListVacancie->end_date < date('Y-m-d'))
                                                            <label class="badge badge-danger">Close</label>
                                                        @else
                                                            <label class="badge badge-success">Open</label>
                                                        @endif
                                                    @else
                                                        <label class="badge badge-danger">{{$ListVacancie->status}}</label>
                                                    @endif
                                                </td>
                                                <td>{{ $ListVacancie->start_date }}</td>
                                                <td>{{ $ListVacancie->end_date }}</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-gradient-info btn-icon-text" onclick="detail({{ $ListVacancie->id }})" > Detail
                                                        <i class="mdi mdi mdi mdi-book-open btn-icon-append"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-gradient-dark btn-icon-text" onclick="update({{ $ListVacancie->id }})" > Edit
                                                        <i class="mdi mdi mdi mdi-note-text btn-icon-append"></i>
                                                    </button>
                                                    {{-- <button type="button" class="btn btn-sm btn-danger btn-icon-text" onclick="destroy({{ $ListVacancie->id }})" >
                                                        <i class="mdi mdi mdi-delete btn-icon-prepend"></i> Hapus
                                                    </button> --}}
                                                    <a href="{{ route('adminhcs.vacancies_listCandidateByPosition', $ListVacancie->id) }}" class="btn btn-sm btn-success btn-icon-text">
                                                        <i class="mdi mdi-account-search"></i> List Candidate By Group Position
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->

        <!-- Modal Add-->
        <div class="modal fade" id="ModalJob" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <form id="add_new_jobs" class="forms-sample" method="POST" action="javascript:void(0)" accept-charset="utf-8" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header">
                            <h3 class="modal-title" id="exampleModalLabel">Modal New Job</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="alert alert-danger print-error-msg-add" style="display:none">
                                <ul></ul>
                            </div>
                            <div class="form-group">
                                <label for="title">Job Position</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Posisi Job">
                                <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-title"></div>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="8"></textarea>
                                <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-description"></div>
                            </div>
                            <div class="form-group">
                                <label for="level">Select Level</label>
                                <select class="form-control form-control-lg" id="level" name="level">
                                    <option value="0">--Select Level--</option>
                                    @foreach ($levels as $data)
                                        <option value="{{ $data->id }}">{{ $data->title }}</option>
                                    @endforeach
                                </select>
                                <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-level"></div>
                            </div>
                            <div class="form-group">
                                <label for="status">Select Status</label>
                                <select class="form-control form-control-lg" id="status" name="status">
                                    <option value="0">--Select Status--</option>
                                    <option value="Open">Open</option>
                                    <option value="Close">Close</option>
                                </select>
                                <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-status"></div>
                            </div>
                            <div class="form-group">
                                <label for="start_date">Start Date</label>
                                <input type="text" class="form-control datepicker_start" id="start_date" name="start_date" placeholder="Start Date">
                                <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-start-date"></div>
                            </div>
                            <div class="form-group">
                                <label for="end_date">End Date</label>
                                <input type="text" class="form-control datepicker_end" id="end_date" name="end_date" placeholder="End Date">
                                <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-end-date"></div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-gradient-danger btn-fw" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-gradient-success btn-fw">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal Detail-->
        <div class="modal fade" id="ModalDetailJob" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form id="add_new_jobs" class="forms-sample" method="POST" action="javascript:void(0)" accept-charset="utf-8" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal Detail Job</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="detail-title"><b> Job Position : </b></label> <br>
                                <label id="detail-title"></label>
                            </div>
                            <div class="form-group">
                                <label for="detail-description"><b> Description : </b></label>
                                <div id="detail-description"></div>
                            </div>
                            <div class="form-group">
                                <label for="detail-level"><b> Selected Level : </b></label> <br>
                                <label id="detail-level"></label>
                            </div>
                            <div class="form-group">
                                <label for="detail-status"><b> Selected Status : </b></label> <br>
                                <label id="detail-status"></label>
                            </div>
                            <div class="form-group">
                                <label for="detail-start-date"><b> Start Date : </b></label> <br>
                                <label id="detail-start-date"></label>
                            </div>
                            <div class="form-group">
                                <label for="detail-end-date"><b> End Date : </b></label> <br>
                                <label id="detail-end-date"></label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-gradient-danger btn-fw" data-dismiss="modal">Close</button>
                            {{-- <button type="submit" class="btn btn-gradient-success btn-fw">Save changes</button> --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal edit-->
        <div class="modal fade" id="ModalEditJob" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form id="edit_jobs" class="forms-sample" method="POST" action="javascript:void(0)" accept-charset="utf-8" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header">
                            <h3 class="modal-title" id="exampleModalLabel">Modal Edit Job</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="alert alert-danger print-error-msg-edit" style="display:none">
                                <ul></ul>
                            </div>
                            <input type="hidden" class="form-control" id="edit_id" name="edit_id">
                            <div class="form-group">
                                <label for="edit_title">Job Position</label>
                                <input type="text" class="form-control" id="edit_title" name="edit_title" placeholder="Posisi Job">
                                <div class="alert alert-danger mt-2 d-none" role="alert" id="alert_edit_title"></div>
                            </div>
                            <div class="form-group">
                                <label for="edit_description">Description</label>
                                <textarea class="form-control" id="edit_description" name="edit_description" rows="8"></textarea>
                                <div class="alert alert-danger mt-2 d-none" role="alert" id="alert_edit_description"></div>
                            </div>
                            <div class="form-group">
                                <label for="edit_level">Select Level</label>
                                <select class="form-control form-control-lg" id="edit_level" name="edit_level">
                                    <option value="0">--Select Level--</option>
                                    @foreach ($levels as $data)
                                        <option value="{{ $data->id }}">{{ $data->title }}</option>
                                    @endforeach
                                </select>
                                <div class="alert alert-danger mt-2 d-none" role="alert" id="alert_edit_level"></div>
                            </div>
                            <div class="form-group">
                                <label for="edit_status">Select Status</label>
                                <select class="form-control form-control-lg" id="edit_status" name="edit_status">
                                    <option value="0">--Select Status--</option>
                                    <option value="Open">Open</option>
                                    <option value="Close">Close</option>
                                </select>
                                <div class="alert alert-danger mt-2 d-none" role="alert" id="alert_edit_status"></div>
                            </div>
                            <div class="form-group">
                                <label for="edit_start_date">Start Date</label>
                                <input type="text" class="form-control datepicker_start_edit" id="edit_start_date" name="edit_start_date" placeholder="Start Date">
                                <div class="alert alert-danger mt-2 d-none" role="alert" id="alert_edit_start_date"></div>
                            </div>
                            <div class="form-group">
                                <label for="edit_end_date">End Date</label>
                                <input type="text" class="form-control datepicker_end_edit" id="edit_end_date" name="edit_end_date" placeholder="End Date">
                                <div class="alert alert-danger mt-2 d-none" role="alert" id="alert_edit_end_date"></div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-gradient-danger btn-fw" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-gradient-success btn-fw">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- partial:partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023 <a href="#">sdaglobal.co.id</a>. All rights reserved.</span>
                {{-- <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span> --}}
            </div>
        </footer>
        <!-- partial -->
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    {{-- <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script> --}}
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap4.min.js"></script>
    {{-- ckEditor --}}
    <script src="{{ url('/') }}/ckeditor/ckeditor.js"></script>
    {{-- datepicker --}}
    <script src="{{ url('/') }}/js/bootstrap-datepicker.min.js"></script>
    <script src="{{ url('/') }}/locales/bootstrap-datepicker.id.min.js"></script>

    <script type="text/javascript">

        new DataTable('#example');

        var description = document.getElementById("description");
            CKEDITOR.replace(description,{
            language:'en-gb'
        });
        CKEDITOR.config.allowedContent = true;

        var description = document.getElementById("edit_description");
            CKEDITOR.replace(description,{
            language:'en-gb'
        });
        CKEDITOR.config.allowedContent = true;

        $(".datepicker_start").datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            todayHighlight: true,
        });
        $(".datepicker_end").datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            todayHighlight: true,
        });
        $(".datepicker_start_edit").datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            todayHighlight: true,
        });
        $(".datepicker_end_edit").datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            todayHighlight: true,
        });

        // proses submit add new job
        $('#add_new_jobs').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            var title = formData.get("title");
            var description = CKEDITOR.instances['description'].getData();
            var level = formData.get("level");
            var status = formData.get("status");
            var start_date = formData.get("start_date");
            var end_date = formData.get("end_date");
            let token   = $("meta[name='csrf-token']").attr("content");
            $.ajax({
                type: 'POST',
                url: "{{ url('vacancies/store') }}",
                // data : formData,
                data: {
                    "title": title,
                    "description" : description,
                    "level": level,
                    "status": status,
                    "start_date": start_date,
                    "end_date": end_date,
                    "_token": token
                },
                cache: false,
                success:function(data){
                    if($.isEmptyObject(data.error)){
                        Swal.fire({
                            icon: 'success',
                            title: `${data.message}`,
                            // text: 'New job added.',
                            showConfirmButton: false,
                            timer: 30000
                        });
                        window.location.href = "{{url('vacancies')}}";
                    }else{
                        printErrorMsgAdd(data.error);
                    }
                }
            });
        });

        // show detail job
        function detail(id) {
            $.ajax({
                url: "{{ url('vacancies/detail') }}/" + id,
                type: "get",
                cache: false,
                dataType: 'json',
                success: function(response) {
                    //fill data to form
                    // console.log(response.data);

                    $('#detail-title').html(response.data.title);
                    $('#detail-description').html(response.data.description);
                    $('#detail-level').html(response.data.level.title);
                    $('#detail-status').html(response.data.status);
                    $('#detail-start-date').html(response.data.start_date);
                    $('#detail-end-date').html(response.data.end_date);
                    //open modal
                    $('#ModalDetailJob').modal('show');
                }
            });
        }

        // show edit job
        function update(id) {
            $.ajax({
                url: "{{ url('CreateLowongan/detail') }}/" + id,
                type: "get",
                cache: false,
                success: function(response) {
                    //fill data to form
                    $('#edit_id').val(response.data[0].id);
                    $('#edit_title').val(response.data[0].title);
                    CKEDITOR.instances['edit_description'].setData(response.data[0].description);
                    $('[name="edit_level"]').val(response.data[0].level);
                    $('[name="edit_status"]').val(response.data[0].status);
                    $('#edit_start_date').val(response.data[0].start_date);
                    $('#edit_end_date').val(response.data[0].end_date);
                    //open modal
                    $('#ModalEditJob').modal('show');
                }
            });
        }

         // proses submit edit job
         $('#edit_jobs').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            var id = formData.get("edit_id");
            var title = formData.get("edit_title");
            var description = CKEDITOR.instances['edit_description'].getData();
            var level = formData.get("edit_level");
            var status = formData.get("edit_status");
            var start_date = formData.get("edit_start_date");
            var end_date = formData.get("edit_end_date");
            let token   = $("meta[name='csrf-token']").attr("content");
            // console.log(id);
            // console.log(title);
            // console.log(description);
            // console.log(level);
            // console.log(status);
            // console.log(start_date);
            // console.log(end_date);
            $.ajax({
                type: 'POST',
                url: "{{ url('CreateLowongan/update') }}",
                // data : formData,
                data: {
                    "id": id,
                    "title": title,
                    "description" : description,
                    "level": level,
                    "status": status,
                    "start_date": start_date,
                    "end_date": end_date,
                    "_token": token
                },
                cache: false,
                success:function(data){
                    if($.isEmptyObject(data.error)){
                        Swal.fire({
                            icon: 'success',
                            title: `${data.message}`,
                            // text: 'New job added.',
                            showConfirmButton: false,
                            timer: 30000
                        });
                        window.location.href = "{{url('CreateLowongan')}}";
                    }else{
                        printErrorMsgEdit(data.error);
                    }
                }
            });
        });

        function destroy(id) {
            Swal.fire({
                icon: 'warning',
                title: 'Hapus Data',
                text: 'Apakah anda yakin ingin mengapus data ini ?',
                showCancelButton: !0,
                confirmButtonText: "Ya",
                cancelButtonText: "Tidak",
                reverseButtons: !0
            }).then(function (e) {
                if (e.value === true) {
                    $.ajax({
                        type: "get",
                        url: "{{ url('CreateLowongan/destroy') }}/" + id,
                        success: function(data) {
                            Swal.fire({
                                icon: 'success',
                                title: `${data.message}`,
                                // text: 'Data Type Outlet Berhasil dihapus.',
                                showConfirmButton: true,
                                // timer: 3000
                            });
                            window.location.href = "{{url('CreateLowongan')}}";
                        }
                    });
                } else {
                    e.dismiss;
                }
            }, function (dismiss) {
                return false;
            });
        }

        function printErrorMsgAdd (msg) {
            $(".print-error-msg-add").find("ul").html('');
            $(".print-error-msg-add").css('display','block');

            $.each( msg, function( key, value ) {
                $(".print-error-msg-add").find("ul").append('<li>'+value+'</li>');
            });
        }

        function printErrorMsgEdit (msg) {
            $(".print-error-msg-edit").find("ul").html('');
            $(".print-error-msg-edit").css('display','block');

            $.each( msg, function( key, value ) {
                $(".print-error-msg-edit").find("ul").append('<li>'+value+'</li>');
            });
        }

    </script>
@endsection
