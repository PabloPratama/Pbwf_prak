<!DOCTYPE html>
<html lang="en">

@include('layouts.lteresepsionis.head')

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    @include('layouts.lteresepsionis.navbar')
    @include('layouts.lteresepsionis.sidebar')

    <div class="content-wrapper">
        <section class="content pt-3">
            <div class="container-fluid">
                @yield('content')
            </div>
        </section>
    </div>

    @include('layouts.lteresepsionis.footer')

</div>

<!-- Scripts -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<script src="{{ asset('assets/dist/js/adminlte.js') }}"></script>

</body>
</html>
