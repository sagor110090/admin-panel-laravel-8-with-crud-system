<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title> {{ siteInfo()->website_name }} || @isset($pageTitle) {{$pageTitle}}@endisset</title>

    <link rel="shortcut icon" href="{{ Storage::url(siteInfo()->favicon) }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('assets') }}/css/app.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/components.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/custom.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/bundles/izitoast/css/iziToast.min.css">
    <link rel="stylesheet" href=" {{asset('assets') }}/bundles/jquery-selectric/selectric.css">

    @stack('css')

</head>

<body class="light light-sidebar theme-white">
    <div id="app">
        <div class="loader"></div>
        <button class="btn-progress" hidden></button>
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            @include('layouts.parts.navbar')
            <div class="main-sidebar sidebar-style-2">
                @include('layouts.parts.sidebar')
                </ul>
                </aside>
            </div>


            <div class="main-content">
                @yield('content')
            </div>
            @include('layouts.parts.footer')
        </div>
    </div>
    <script src="{{ asset('assets') }}/js/app.min.js"></script>
    <script src="{{ asset('assets') }}/bundles/jquery-selectric/jquery.selectric.min.js"></script>
    <script src="{{ asset('assets') }}/js/page/index.js"></script>
    <script src="{{ asset('assets') }}/js/scripts.js"></script>
    <script src="{{ asset('assets') }}/js/custom.js"></script>
    <script src="{{ asset('assets') }}/js/jquery.playSound.js"></script>
    <script src="{{ asset('assets') }}/bundles/izitoast/js/iziToast.min.js"></script>
    <script src="{{ asset('assets') }}/bundles/sweetalert/sweetalert.min.js"></script>
    <script>
        //delete sweet alert
        function sweetalertDelete(id) {
            event.preventDefault();
            swal({
                    title: "Are you sure?",
                    text: "To continue this action!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        swal("Your action has beed done! :)", {
                            icon: "success",
                            buttons: false,
                            timer: 1000
                        });
                        $("#deleteButton" + id).submit();
                    }
                });
        }
        // multiple click privent
        $('.oneTimeSubmit').click(function () {
        var count1=0;
        var count2=-1;

            const inputs = document.querySelectorAll('#oneTimeSubmit input');
            const requiredFields = Array.from(inputs).filter(input => input.required);
            for (let index = 0; index < requiredFields.length; index++) {
                count1 = index;

                if (requiredFields[index].value) {
                    count2 ++;
                }
            }
            if (count1 == count2) {
                    $('.oneTimeSubmit').addClass('btn-progress');
            }

        });
        //for validation
        $('input, textarea, select').keyup(function (e) {
            $(this).closest('form').addClass("was-validated");
        });
       // tostr message
        @if(Session::has('success'))
        iziToast.success({
            // title: 'Hello, world!',
            message: '{{Session::get('success')}}',
            position: 'topCenter'
        });
        @endif
        @if(Session::has('warning'))
        iziToast.warning({
            // title: 'Hello, world!',
            message: '{{Session::get('warning')}}',
            position: 'topCenter'
        });
        @endif
        @if(Session::has('error'))
        iziToast.error({
            // title: 'Hello, world!',
            message: '{{Session::get('error')}}',
            position: 'topCenter'
        });
        @endif

    </script>
    @stack('js')

</body>

</html>
