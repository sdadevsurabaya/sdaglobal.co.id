@extends('back/layouts/main_admin')

@section('area')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    <span class="page-title-icon bg-gradient-primary text-white mr-2">
                        <i class="mdi mdi-message"></i>
                    </span> Message
                </h3>
            </div>

            {{-- konten --}}
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th style="width: 10%">No</th>
                                        <th style="width: 40%">Name</th>
                                        <th style="width: 40%">email</th>
                                        <th style="width: 40%">Phone</th>
                                        <th style="width: 15%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($message as $key => $data)
                                        <tr style="{{ empty($data->sudah_baca) ? 'font-weight: bold;' : '' }}">
                                            <td>{{$no++}}</td>
                                            <td>{{ $data->nama }}</td>
                                            <td>{{ $data->email }}</td>
                                            <td>{{ $data->phone }}</td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-gradient-dark btn-icon-text" onclick="baca({{ $data->id }})" > Baca
                                                    <i class="mdi mdi mdi mdi-note-text btn-icon-append"></i>
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

        <!-- Modal Read Message-->
        <div class="modal fade" id="ModalReadMessage" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form id="send_reply_message" class="forms-sample" method="POST" action="javascript:void(0)" accept-charset="utf-8" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header">
                            <h3 class="modal-title" id="exampleModalLabel">Modal Detail Message</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="reply"><b>Name : </b> </label> <label id="nama"></label>
                            </div>
                            <div class="form-group">
                                <label for="reply"><b>Email : </b> </label> <label id="email"></label>
                            </div>
                            <div class="form-group">
                                <label for="reply"><b>No. Tlp : </b> </label> <label id="phone"></label>
                            </div>
                            <div class="form-group">
                                <label for="reply"><b>Message : </b> </label> <label id="pesan"></label>
                            </div>
                            <hr>
                            <div class="alert alert-danger print-error-msg-reply" style="display:none">
                                <ul></ul>
                            </div>
                            <div class="form-group">
                                <label for="reply"><b>Reply Message</b></label>
                                <input type="hidden" class="form-control" id="id" name="id">
                                <input type="hidden" class="form-control" id="user_nama" name="user_nama">
                                <input type="hidden" class="form-control" id="user_email" name="user_email">
                                <textarea type="text" class="form-control" id="reply" name="reply" cols="1" rows="10" placeholder="Level"> </textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-gradient-danger btn-fw" data-dismiss="modal">Close</button>
                            <button id="send" type="submit" class="btn btn-gradient-success btn-fw">Send Message</button>

                            <div id="loading" style="display:none;">
                                <button class="btn btn-gradient-success btn-fw" type="button" disabled>
                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    Loading...
                                </button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- partial:partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2024 <a href="#">sdaglobal.co.id</a>. All rights reserved.</span>
                {{-- <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span> --}}
            </div>
        </footer>
        <!-- partial -->
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap4.min.js"></script>
    {{-- ckEditor --}}
    <script src="{{ url('/') }}/ckeditor/ckeditor.js"></script>
    {{-- <script src="https://cdn.ckeditor.com/4.24.0-lts/standard/ckeditor.js"></script> --}}

    <!-- Include the Quill library -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script> --}}

    <script type="text/javascript">
        new DataTable('#example');

        var reply = document.getElementById("reply");
            CKEDITOR.replace(reply,{
            language:'en-gb'
        });
        CKEDITOR.config.allowedContent = true;

        // CKEDITOR.replace( 'reply' );

        // const quill = new Quill('#reply', {
        //     theme: 'snow'
        // });

        // baca message
        function baca(id) {
            $.ajax({
                url: "{{ url('read_message') }}/" + id,
                type: "get",
                cache: false,
                success: function(response) {
                    //fill data to form
                    // console.log(response.data);
                    CKEDITOR.instances['reply'].setData('');
                    document.getElementById('nama').innerText = response.data.nama;
                    document.getElementById('email').innerText = response.data.email;
                    document.getElementById('phone').innerText = response.data.phone;
                    $('#id').val(response.data.id);
                    $('#user_nama').val(response.data.nama);
                    $('#user_email').val(response.data.email);
                    document.getElementById('pesan').innerText = response.data.pesan;
                    //open modal
                    $('#ModalReadMessage').modal('show');
                }
            });
        }

        $('#send_reply_message').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            // formData.append('reply', CKEDITOR.instances['reply'].getData());
            let id = formData.get("id");
            var user_nama   = formData.get("user_nama");
            var user_email  = formData.get("user_email");
            var reply       = CKEDITOR.instances['reply'].getData();
            let token       = $("meta[name='csrf-token']").attr("content");
            var myButtonSend = document.getElementById('send');
            // console.log(user_email);

            $.ajax({
                type: 'POST',
                url: "{{ url('reply_message') }}/" + id,
                // data : formData,
                data: {
                    "user_nama": user_nama,
                    "user_email": user_email,
                    "reply" : reply,
                    "_token": token
                },
                // contentType: false,
                // processData: false,
                beforeSend: function() {
                    // Menyembunyikan tombol dengan menambahkan style "display: none;"
                    myButtonSend.style.display = 'none';

                    // Menampilkan animasi loading sebelum request dimulai
                    $('#loading').show();
                },
                success:function(data){
                    // console.log(data);
                    if($.isEmptyObject(data.error)){
                        Swal.fire({
                            icon: 'success',
                            type: "success",
                            title: 'Berhasil!',
                            text: `${data.message}`,
                            // showConfirmButton: false,
                            timer: 3000
                        });
                        // alert(data.message);
                        window.location.href = "{{ url('message')}}";
                    }else{
                        printErrorMsgReplyMessage(data.error);
                    }
                },
                complete: function() {
                    // Menampilkan tombol dengan menambahkan style "display: block;"
                    myButtonSend.style.display = 'block';

                    // Menyembunyikan animasi loading setelah request selesai
                    $('#loading').hide();
                },
                cache: false
            });
        });

        function printErrorMsgReplyMessage (msg) {
            $(".print-error-msg-reply").find("ul").html('');
            $(".print-error-msg-reply").css('display','block');

            $.each( msg, function( key, value ) {
                $(".print-error-msg-reply").find("ul").append('<li>'+value+'</li>');
            });
        }
    </script>
@endsection



