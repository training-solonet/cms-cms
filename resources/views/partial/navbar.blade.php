<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top">CMS Solonet</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon-danger"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0 d-flex align-items-center">
                    @if (Route::has('login'))
                        <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        @auth
                            <button class="btn" style="color: red">logout</button>
                        </form>
                    @else
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                        @if (Route::has('register'))
                            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                        @endif
                    @endauth
                    @endif
                  <li class="nav-item"><a class="nav-link" href="#portofolio">Portofolio</a></li>
                </ul>
            </div>
        </div>
    </nav>
