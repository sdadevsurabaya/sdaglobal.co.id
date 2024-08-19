<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $title }}</title>
    <link rel="shortcut icon" href="{{asset('assets/img/logo/ikon-sda.ico')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{ url('/') }}/admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ url('/') }}/admin/assets/css/style.css">
    <!-- End layout styles -->
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row flex-grow">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left p-5">
                            <div class="brand-logo">
                                <img loading="lazy" src="{{asset('assets/img/logo/logo-sda-global.svg')}}">
                            </div>
                            {{-- <h4>e-Recruitment Indraco System</h4> --}}
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('actionregister') }}" method="post" class="pt-3">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control form-control-lg"
                                        placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-lg"
                                        placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control form-control-lg"
                                    placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="confirm_password" class="form-control form-control-lg"
                                    placeholder="Confirm Password">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="role" class="form-control form-control-lg"
                                        placeholder="" value="Administrator" readonly>
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn"
                                        type="submit">REGISTER</button> <br>
                                    <p class="text-center">Sudah punya akun silahkan <a href="{{ route('login') }}">Login Disini!</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ url('/') }}/admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="{{ url('/') }}/admin/assets/js/off-canvas.js"></script>
    <script src="{{ url('/') }}/admin/assets/js/hoverable-collapse.js"></script>
    <script src="{{ url('/') }}/admin/assets/js/misc.js"></script>
    <!-- endinject -->
</body>

</html>

