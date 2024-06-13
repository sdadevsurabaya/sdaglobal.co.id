<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SDA &bull; {{ $title }}</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/logo/ikon-sda.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-5.3.2-dist/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free-6.5.1-web/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/HelveticaNeue/HelveticaNeue.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/footbar.css') }}">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <style>
        * {
            outline: solid 1px green;
            outline: solid 1px transparent;
        }
    </style>
    @yield('pageStyles')
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-537D36NP');
    </script>
    <!-- End Google Tag Manager -->
</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-537D36NP" height="0" width="0"
            style="display:none;visibility:hidden">
        </iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

    <header class="page-header">
        @include('front.layout.navbar'){{-- end of navbar --}}
    </header>

    <main class="page-wrapper fs-xxl-4">
        @yield('content')
    </main>

    <footer class="page-footer">
        @include('front.layout.footbar'){{-- end of footbar --}}
    </footer>

    <script src="{{ asset('vendor/jquery-3.6.0/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-5.3.2-dist/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <!--Toaster js-->
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}")
            @endforeach
        @endif

        @if (session('success'))
            toastr.success("{{ session('success') }}");
        @endif
    </script>
    @yield('pageScripts')

</body>

</html>
