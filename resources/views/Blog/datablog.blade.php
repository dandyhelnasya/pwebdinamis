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
      <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" align="center">Data Mahasiswa</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                <thead>
                <tr>
                  <th colspan="1"><center>Nama</center></th>
                  <th colspan="4" style="width: 25%"><center>Aksi</center></th>
                </tr>
                </thead>
                  @foreach ($varAngka as $isinya)
                  <tr>
                    <td>{{$isinya}}</td>
                    <td>
                      <a href="{{$isinya}}">
                      <i class="fas fa-eye"> Lihat | </i>
                      </a>
            
                      <a href="{{$isinya}}">
                      <i class="fas fa-edit purple"> Edit | </i>
                      </a>
 
                      <a href="{{$isinya}}">
                      <i class="fas fa-trash-alt red"> Hapus</i>
                      </a>
                    </td>
                  </tr>
                  @endforeach
                </table>
              </div> 
              </div>
              </div>    
              </div>
              </div>
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