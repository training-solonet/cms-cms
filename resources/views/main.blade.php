<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{url('style/css/styles.css')}}" rel="stylesheet" />
    <title>CMS-SoloNet</title>
  </head>
  <body>
      <!--navbar-->
        @include('partial.navbar')
      <!--end navbar-->

    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                 @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            <p>{{ $message }}</p>
        </div>
    @endif
                @foreach ($data as $p)
                <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                        <center><img width="100px" src="{{url('pict/'.$p->gambar)}}"></center>
                        <div class="card-body">
                        <h5 class="card-title">{{ $p->training }}</h5>
                        <p class="card-text"></p>
                        {{-- <a href="" class="btn btn-warning">Daftar</a> --}}
                        @if(Route::has('login'))
                        @auth
                            <a href="{{ route('dataUser.edit', $p->id) }}" class="btn btn-warning">Daftar</a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-warning">Daftar</a>
                        @endauth
                        @endif
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="container">
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </header>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>




