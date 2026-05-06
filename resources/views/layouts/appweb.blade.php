<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Grupo Codware')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @include('partials.styles')
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WPTDKCWB" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="page-wrapper">

        @include('partials.header')

        @yield('content')

        @include('partials.footer')

    </div>

    @include('partials.scripts')

    @if(session('success'))

    <script>
    Swal.fire({
        icon: 'success',
        title: 'Operación exitosa',
        text: "{{ session('success') }}",
        position: 'center',
        showConfirmButton: false,
        timer: 2500,
        timerProgressBar: true,
        backdrop: 'rgba(15, 23, 42, 0.4)',
        showClass: {
            popup: 'animate__animated animate__fadeInDown'
        },
        hideClass: {
            popup: 'animate__animated animate__fadeOutUp'
        },
        customClass: {
            popup: 'rounded-4 shadow-lg px-3 py-4'
        }
    });
    </script>
    @endif

    @if($errors->any())
    <script>
    Swal.fire({
        icon: 'error',
        title: 'Algo salió mal',
        text: "{{ $errors->first() }}",
        position: 'center',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        backdrop: 'rgba(15, 23, 42, 0.5)',
        showClass: {
            popup: 'animate__animated animate__shakeX'
        },
        customClass: {
            popup: 'rounded-4 shadow-lg px-3 py-4'
        }
    });
    </script>
    @endif

</body>

</html>