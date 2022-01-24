
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
            <div class="card card-info card-outline">
                <div class="card-header">
                    <div class="card-tools">
                        <a href="{{ route('dataAdmin.create') }}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i>
                        </a>
                    </div>
                    <div class="logout">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <button>
                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-jet-dropdown-link>
                            </button>

                        </form>
                    </div>
                </div>
                <div class="card-body">

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success" role="alert">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>training</th>
                            <th>Img</th>
                            <th>Deskripsi</th>
                            <th>Mentor</th>
                            <th>waktu</th>
                            <th>harga</th>
                        </tr>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($dataKu as $data )
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->training }}</td>
                            <td><center><img width="100px" src="{{ url('pict/'.$data->gambar) }}"></center></td>
                            <td>{{ $data->deskripsi }}</td>
                            <td>{{ $data->mentor }}</td>
                            <td>{{ $data->waktu }}</td>
                            <td>{{ $data->harga }}</td>
                            <td class="text-center">
                                <form method="post" action="{{route('dataAdmin.destroy', $data->id)}}" >
                                    {{-- <a href="{{route('dataAdmin.edit')}}">EDIT</a> --}}
                                    <a href="{{route('dataAdmin.edit', $data->id)}}">edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return
                                    confirm('Yakin Di Hapus?')">HAPUS
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
          <!-- /.container-fluid -->
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
