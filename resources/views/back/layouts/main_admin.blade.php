{{-- <link rel="stylesheet" href="{{ url('/') }}/bootstrap/css/bootstrap.min.css"> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $title }}</title>
    <link rel="shortcut icon" href="{{asset('assets/img/logo/ikon-sda.ico')}}" type="image/x-icon">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ url('/') }}/admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/admin/assets/vendors/css/vendor.bundle.base.css">
    {{-- data table --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap4.min.css">
    <!-- datepicker bootstrap -->
    {{-- <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css"> --}}
    <link rel="stylesheet" href="{{ url('/') }}/css/bootstrap-datepicker.min.css">
    {{-- Sweet Alert --}}
    <link rel="stylesheet" href="{{ url('/') }}/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <script src="{{ url('/') }}/sweetalert2/sweetalert2.min.js"></script>
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ url('/') }}/admin/assets/css/style.css">
    <!-- End layout styles -->

</head>

<body>
    <div class="container-scroller">
            @include('back/layouts/navbaradmin')

                @yield('area')
          </div>
    </div>
    @include('back/layouts/footeradmin')
</body>
</html>
