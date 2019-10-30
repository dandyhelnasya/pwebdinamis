<!DOCTYPE html>
<html lang="en">

  <head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Data Blog</title>
    <@include('Template.head')
    
  </head>

  <body class="hold-transition sidebar-mini">
    <div class="wrapper" id="app">

      <!-- Navbar -->
        @include('Template.navbar')
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
        @include('Template.sidebar-left')

      <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Pojok Programmer</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item active">Data Blog</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <h3>Data Blog</h3>
          {{--isi--}}
      </div>
      <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <!-- Main Footer -->
      @include('Template.footer')
      </div>
      <!-- ./wrapper -->

     <!-- REQUIRED SCRIPTS -->

      <!-- jQuery -->
      @include('Template.script')
  </body>
</html>
