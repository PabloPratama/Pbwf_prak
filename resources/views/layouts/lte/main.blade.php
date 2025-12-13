<!DOCTYPE html>
<html lang="en">

@include('layouts.lte.head')

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    @include('layouts.lte.navbar')

    @include('layouts.lte.sidebar')

    <div class="content-wrapper">
        <section class="content pt-3">
            <div class="container-fluid">
                @yield('content')
            </div>
        </section>
    </div>

    @include('layouts.lte.footer')

</div>

<!-- REQUIRED SCRIPTS -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<script src="{{ asset('assets/dist/js/adminlte.js') }}"></script>

<!-- OPTIONAL SCRIPTS (index2.html original) -->
<script src="{{ asset('assets/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
<script src="{{ asset('assets/plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
<script src="{{ asset('assets/plugins/chart.js/Chart.min.js') }}"></script>

<script src="{{ asset('assets/dist/js/demo.js') }}"></script>
<script src="{{ asset('assets/dist/js/pages/dashboard2.js') }}"></script>

</body>
</html>
