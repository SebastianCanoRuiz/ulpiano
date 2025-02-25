<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>@yield('htmlTitle')</title>
  @include('dashboard.partials.requiredCSS')
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">

@include('dashboard.partials.navbar')

@include('dashboard.partials.mainSidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> @yield('pageTitle')</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">

            @yield('rutaActual')
        
            {{-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol> --}}

          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">

      @yield('content')

      @include('dashboard.partials.ejemploContenido')
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@include('dashboard.partials.sidebarDerecho')

@include('dashboard.partials.mainFooter')
</div>
<!-- ./wrapper -->

@include('dashboard.partials.requiredScripts')
</body>
</html>
