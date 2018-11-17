<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('includes.dashboard.head')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    @include('includes.dashboard.nav')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                @yield('page-title')
                <small>@yield('page-subtitle')</small>
            </h1>
            <ol class="breadcrumb">
                @yield('breadcrumb')
            </ol>
        </section>

        <!-- Main content -->
        @yield('content')
    </div>
    <!-- /.content-wrapper -->

    @include('includes.dashboard.footer')

    <!-- Control Sidebar -->
    @include('includes.dashboard.right_sidebar')
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

@include('includes.dashboard.scripts')
</body>
</html>
