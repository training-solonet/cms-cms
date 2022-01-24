
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
@include('layout.head')
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('layout.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 @include('layout.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Starter Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
      <div class="content">
        <form method='POST'action="{{route('dataAdmin.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="training" class="form-label">Training</label>
              <input type="text" name="training" class="form-control" id="training">
              <div id="training" class="form-text">Masukkan Training</div>
            </div>
            <div class="mb-3">
              <label for="gambar" class="form-label">gambar</label>
              <input type="file" name="gambar" class="form-control" id="gambar">
              <div id="gambar" class="form-text">Masukkan Training</div>
            </div>
            <div class="mb-3">
                <div class="form-floating">
                    <label for="deskripsi" class="form-label">deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" cols="228" rows="10" id="floatingTextarea2" style="height: 100px"></textarea>
                </div>
            </div>
            <div class="mb-3">
                <label for="mentor" class="form-label">Mentor</label>
                <input type="text" name="mentor" class="form-control" id="mentor">
                <div id="mentor" class="form-text">Masukkan Mentor</div>
              </div>
              <div class="mb-3">
                <label for="waktu" class="form-label">Waktu</label>
                <input type="text" name="waktu" class="form-control" id="waktu">
                <div id="waktu" class="form-text">Masukkan Waktu</div>
              </div>
              <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="text" name="harga" class="form-control" id="harga">
                <div id="harga" class="form-text">Masukkan Harga</div>
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
      </div>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('layout.script')

</body>
</html>
