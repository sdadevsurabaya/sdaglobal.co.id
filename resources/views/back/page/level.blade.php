@extends('back/layouts/main_admin')

@section('area')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    List Level
                </h3>
            </div>

            {{-- konten --}}
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-gradient-primary btn-fw btn-icon-text" data-toggle="modal" data-target="#ModalLevel">
                        <i class="mdi mdi-library-plus"></i> Add New Level
                    </button>
                </div>
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th style="width: 10%">No</th>
                                        <th style="width: 40%">Level</th>
                                        <th style="width: 15%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($levels as $key => $ListLevel)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{ $ListLevel->title }}</td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-gradient-dark btn-icon-text" onclick="update({{ $ListLevel->id }})" > Edit
                                                    <i class="mdi mdi mdi mdi-note-text btn-icon-append"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-danger btn-icon-text" onclick="destroy({{ $ListLevel->id }})" >
                                                    <i class="mdi mdi mdi-delete btn-icon-prepend"></i> Hapus
                                                </button>
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
        <!-- content-wrapper ends -->

        <!-- Modal Add-->
        <div class="modal fade" id="ModalLevel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form id="add_new_evel" class="forms-sample" method="POST" action="javascript:void(0)" accept-charset="utf-8" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header">
                            <h3 class="modal-title" id="exampleModalLabel">Modal New Level</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="alert alert-danger print-error-msg-add" style="display:none">
                                <ul></ul>
                            </div>
                            <div class="form-group">
                                <label for="title">Level / Posision</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Level">
                                <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-title"></div>
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

        <!-- Modal edit-->
        <div class="modal fade" id="ModalEditLevel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form id="edit_level" class="forms-sample" method="POST" action="javascript:void(0)" accept-charset="utf-8" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header">
                            <h3 class="modal-title" id="exampleModalLabel">Modal Edit Level</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="alert alert-danger print-error-msg-edit" style="display:none">
                                <ul></ul>
                            </div>
                            <input type="hidden" class="form-control" id="edit_id" name="edit_id" placeholder="">
                            <div class="form-group">
                                <label for="edit_title">Level / Posision</label>
                                <input type="text" class="form-control" id="edit_title" name="edit_title" placeholder="Level">
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

        // proses submit add new level
        $('#add_new_evel').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            var title = formData.get("title");
            let token   = $("meta[name='csrf-token']").attr("content");
            // console.log(title);
            $.ajax({
                type: 'POST',
                url: "{{ url('level/store') }}",
                // data : formData,
                data: {
                    "title": title,
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
                        window.location.href = "{{url('level')}}";
                    }else{
                        printErrorMsgAdd(data.error);
                    }
                }
            });
        });

        // show edit level
        function update(id) {
            $.ajax({
                url: "{{ url('level/show') }}/" + id,
                type: "get",
                cache: false,
                success: function(response) {
                    //fill data to form
                    $('#edit_id').val(response.data.id);
                    $('#edit_title').val(response.data.title);
                    //open modal
                    $('#ModalEditLevel').modal('show');
                }
            });
        }

        // proses submit edit level
        $('#edit_level').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            var id = formData.get("edit_id");
            var title = formData.get("edit_title");
            let token   = $("meta[name='csrf-token']").attr("content");
            console.log(id);
            console.log(title);
            $.ajax({
                type: 'POST',
                url: "{{ url('level/update') }}",
                // data : formData,
                data: {
                    "id": id,
                    "title": title,
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
                        window.location.href = "{{url('level')}}";
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
                        url: "{{ url('level/destroy') }}/" + id,
                        success: function(data) {
                            Swal.fire({
                                icon: 'success',
                                title: `${data.message}`,
                                // text: 'Data Type Outlet Berhasil dihapus.',
                                showConfirmButton: true,
                                // timer: 3000
                            });
                            window.location.href = "{{url('level')}}";
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
