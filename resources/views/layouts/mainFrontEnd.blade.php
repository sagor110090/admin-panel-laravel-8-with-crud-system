<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ siteInfo()->website_name }} | @isset($pageTitle)
        {{ $pageTitle }}
        @endisset
    </title>
   <link rel="stylesheet" type="text/css" href="{{ asset('frontEnd') }}/assets/font/style.css"/>
    <link rel="shortcut icon" href="{{ Storage::url(siteInfo()->favicon) }}" type="image/x-icon">
    <link href="{{ asset('frontEnd') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontEnd') }}/assets/css/fontawesome.css">
    <link rel="stylesheet" href="{{ asset('frontEnd') }}/assets/css/owl.css">
    <link rel="stylesheet" href="{{ asset('frontEnd') }}/assets/css/custom.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/bundles/izitoast/css/iziToast.min.css">
    @stack('css')


</head>

<body>

    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <header class="background-header">

        <nav class="navbar navbar-expand-lg navbar-light bg-white border pl-2 pr-2">
            <a class="navbar-brand d-lg-none" href="/"><img src="{{Storage::url(siteInfo()->logo)}}" height="" width="150" alt=""></a>

            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse justify-content-between collapse" id="navbarToggle" style="">

                <ul class="navbar-nav">

                    <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                        <a class="nav-link" href="/">{{__('Welcome')}}
                        </a>
                    </li>
                    <li class="nav-item {{ request()->is('menu*') ? 'active' : '' }}">
                        <a class="nav-link" href="/menu">{{__('Menu')}}</a>
                    </li>
                </ul>

                <a class="navbar-brand d-none d-lg-block" href="/"><img src="{{Storage::url(siteInfo()->logo)}}" height="" width="150" alt=""></a>



                <ul class="navbar-nav">
                    <li class="nav-item {{ request()->is('reservations*') ? 'active' : '' }}">
                        <a class="nav-link" href="/reservations">{{__('Reservations')}}</a>
                    </li>
                    <li class="nav-item {{ request()->is('order-now*') ? 'active' : '' }}">
                        <a class="nav-link" href="/order-now">{{__('ORDER NOW')}}</a>
                    </li>
                    @if(\Cart::getContent()->count()>0)
                    <li class="nav-item {{ request()->is('cart*') ? 'active' : '' }}">
                        <a class="nav-link" href="/cart">{{__('Cart')}}</a>
                    </li>

                    @endif
                </ul>
            </div>
        </nav>

    </header>


    @yield('pages')

    <footer>
        <div class="container-fluid">
            <div class="sqs-block-content offset-md-2">
                <h2><a target="_blank" href="{{siteInfo()->facebook}}">Facebook</a>&nbsp; | &nbsp;<a target="_blank"
                        href="{{siteInfo()->instagram}}">Instagram</a>&nbsp; | &nbsp;<a target="_blank"
                        href="{{siteInfo()->twitter}}">Twitter</a>
                </h2>

            </div>
        </div>
    </footer>


    <script src="{{ asset('frontEnd') }}/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('frontEnd') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('frontEnd') }}/assets/js/custom.js"></script>
    <script src="{{ asset('frontEnd') }}/assets/js/owl.js"></script>
    <script src="{{ asset('assets') }}/bundles/izitoast/js/iziToast.min.js"></script>
    <script>
        // tostr message
        @if(Session::has('success'))
        iziToast.success({
            // title: 'Hello, world!',
            message: '{{Session::get('success')}}',
            position: 'topRight'
        });
        @endif
        @if(Session::has('warning'))
        iziToast.warning({
            // title: 'Hello, world!',
            message: '{{Session::get('warning')}}',
            position: 'topRight'
        });
        @endif
        @if(Session::has('error'))
        iziToast.error({
            // title: 'Hello, world!',
            message: '{{Session::get('error')}}',
            position: 'topRight'
        });
        @endif

    </script>

    @stack('js')

</body>

</html>
