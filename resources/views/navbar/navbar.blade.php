<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
        <a class="navbar-brand" href="/">
            <div style="max-height: 80px; max-width: 180px; overflow:hidden;">
                <img src="/image/koorsus.png" alt="" class="img-fluid mt-1">
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <a class="navbar-brand" href="/">
                    <div style="overflow:hidden;" class="image">
                        <img src="/image/koorsusid.png" alt="" class="img-fluid">
                    </div>
                </a>
                <span></span>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body" id="navbarNav">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link mx-3 {{ $title === 'Home' ? 'active' : '' }}" href="/">
                            Home
                            <i class="home"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-3 {{ $title === 'Blog' ? 'active' : '' }}" href="/">Blog<i
                                class="blog"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-3 {{ $title === 'Good' ? 'active' : '' }}" href="/about"><i
                                class="good"></i>Good News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-3 {{ $title === 'Categories' ? 'active' : '' }}" href="/categories"><i
                                class="service"></i>Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-3 {{ $title === 'About' ? 'active' : '' }}" href="/about"><i
                                class="about"></i>About</a>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    @auth

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Welcome back, {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/dashboard"><i
                                            class="bi bi-layout-text-sidebar-reverse"></i>
                                        My
                                        Dashboard</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>
                                            Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <!-- Button trigger modal -->
                        <button type="button" class="btn bg-transparent border-0" data-bs-toggle="modal"
                            data-bs-target="#collogin">
                            <a href="#" class="nav-link fs-5 {{ $title === 'Login' ? 'active' : '' }}">
                                <ion-icon name="person" id="user" style="color: #fff"></ion-icon>
                            </a>
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="collogin" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content d-flex">
                                    <div class="d-flex justify-content-end p-2">
                                        <button type="button" class="btn-close fs-5" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body d-flex mt-10">
                                        <div class="container" id="container">
                                            <div class="form-container sign-up-container">
                                                <form action="#">
                                                    <h2>Buat Akun</h2>
                                                    <input type="text" placeholder="Name">
                                                    <input type="email" placeholder="Email">
                                                    <input type="password" placeholder="Password">
                                                    <input type="password" placeholder="Konfirmasi Password">
                                                    <button>Sign Up</button>
                                                </form>
                                            </div>
                                            <div class="form-container sign-in-container">
                                                <form action="#">
                                                    <h1>Masuk</h1>
                                                    <input type="email" placeholder="Email">
                                                    <input type="password" placeholder="Password">
                                                    <a href="">Lupa password ?</a>
                                                    <button>Sign In</button>
                                                </form>
                                            </div>
                                            <div class="overlay-container">
                                                <div class="overlay">
                                                    <div class="overlay-panel overlay-left">
                                                        <h2>Halo Sobat Koorsus</h2>
                                                        <p>Silahkan masuk dengan akun anda</p>
                                                        <button class="press" id="signin">Sign In</button>
                                                    </div>
                                                    <div class="overlay-panel overlay-right">
                                                        <h2>Welcome Back</h2>
                                                        <p>Silahkan daftar dengan email anda</p>
                                                        <button class="press" id="signup">Sign Up</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endauth
                </ul>
            </div>
        </div>
</nav>
