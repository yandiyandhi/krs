{{-- <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
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
                        <a class="nav-link mx-3 {{ $title === 'Blog' ? 'active' : '' }}" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="about"></i>Blog</a>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Programming</a></li>
                            <li><a class="dropdown-item" href="#">Google Workspace</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-3 {{ $title === 'Good News' ? 'active' : '' }}" href="/goodnews"><i
                                class="good"></i>Good News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-3 {{ $title === 'Service' ? 'active' : '' }}" href="/service"><i
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
</nav> --}}

 <!-- Begin alert -->
 <div class="container">
    <div class="alert alert-primary active" id="alertSuggestion">
        <div class="alert-content">
            <p>Welcome to Koorsus | Mari Belajar, Berkembang dan Bertumbuh bersama Koorsus</p>
            <a href="#" class="btn btn-dark" target="_blank">Join Now</a>
        </div>
        <button class="btn btn-close" id="closeAlertSuggestion"><i class="ri-close-line"></i></button>
    </div>
</div>

<!-- End alert -->

<!-- Begin base navbar -->

<div class="container">
    <div class="base-navbar flex">
        <div class="menu" id="baseNavbar">
            <ul class="list">
                <li class="list-item"><a href="#" class="list-link">About</a></li>
                <li class="list-item"><a href="#" class="list-link">Contact Us</a></li>
                <li class="list-item"><a href="/dashboard" class="list-link">Login / Register</a></li>
            </ul>
        </div>
        <div class="anothers-list flex">
            <div class="font-size-btns flex">
                <button class="btn btn-font-size" id="minimize">A-</button>
                <button class="btn btn-font-size active" id="normal">A</button>
                <button class="btn btn-font-size" id="maximize">A+</button>
            </div>
            <div class="change-theme flex">
                <button class="btn btn-theme active" id="sun"><i class="ri-sun-line"></i></button>
                <button class="btn btn-theme" id="moon"><i class="ri-moon-line"></i></button>
            </div>
            <ul class="list social-list flex">
                <li class="list-item"><a href="https://www.facebook.com/koorsus" class="list-link" target="_blank"><i class="ri-facebook-box-fill"></i></a></li>
                <li class="list-item"><a href="https://www.tiktok.com/@koorsus" class="list-link" target="_blank"><i class="ri-tiktok-fill"></i></a></li>
                <li class="list-item"><a href="https://www.linkedin.com/company/koorsus" class="list-link" target="_blank"><i class="ri-linkedin-fill"></i></a></li>
                <li class="list-item"><a href="https://www.youtube.com/@koorsus" class="list-link" target="_blank"><i class="ri-youtube-fill"></i></a></li>
                <li class="list-item"><a href="https://www.instagram.com/koorsus/" class="list-link" target="_blank"><i class="ri-instagram-fill"></i></a></li>
                <li class="list-item"><a href="https://t.me/+UZSIYDmXxXA4ZTg1" class="list-link" target="_blank"><i class="ri-telegram-fill"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container">
    <div class="clear">
        <hr>
    </div>
</div>
<!-- End Base navbard -->

<!-- Begin navbar -->
<div class="container">
    <div class="navbar flex" id="navbar">
        <div class="logo flex">
            <a href='/'><img src="/image/logobrand.png" alt="site" class="img img-top"></a>
        </div>
        <div class="list navbar-list">
            <ul class="list">
                <li class="list-item dropdown {{ $active === 'home' ? 'active' : '' }}">
                    <a href="/" class="list-link {{ $active === 'home' ? 'active' : '' }}">Home</i></a>
                </li>
                <li class="list-item dropdown {{ $active === 'goodnews' ? 'active' : '' }}">
                    <a href="/goodnews" class="list-link {{ $active === 'goodnews' ? 'active' : '' }}">Good News</a>
                </li>
                <li class="list-item dropdown lifestyle">
                    <a href="#" class="list-link lifestyle">Blog <i class="ri-arrow-drop-down-line"></i></a>
                    <div class="container">
                        <div class="lifestyle-sections">
                            <div class="last-posts">
                                <div class="post">
                                    <a href="#"><img src="/image/1.jpg" alt="image" class="img img-lifestyle"></a>
                                    <a href="#" class="link">
                                        <h2 class="title">7 common mistakes eveyone makes while traveling</h2>
                                    </a>
                                    <span class="auther">joan wallace</span>. <span class="date">FEB 18,
                                        2022</span>
                                </div>
                                <div class="post">
                                    <a href="#"><img src="/image/2.jpg" alt="image" class="img img-lifestyle"></a>
                                    <a href="#" class="link">
                                        <h2 class="title">7 common mistakes eveyone makes while traveling</h2>
                                    </a>
                                    <span class="auther">joan wallace</span>. <span class="date">FEB 18,
                                        2022</span>
                                </div>
                                <div class="post">
                                    <a href="#"><img src="/image/3.jpg" alt="image" class="img img-lifestyle"></a>
                                    <a href="#" class="link">
                                        <h2 class="title">7 common mistakes eveyone makes while traveling</h2>
                                    </a>
                                    <span class="auther">joan wallace</span>. <span class="date">FEB 18,
                                        2022</span>
                                </div>
                                <div class="membership">
                                    <span>Koorsus</span>
                                    <h2>Permiun Membership</h2>
                                    <span>Become a Member Today!</span>
                                    <a href="#" class="link btn btn-plane">View pricing plans</a>
                                </div>
                            </div>
                            <div class="trand-tags">
                                <span>Tranding Tags: </span>
                                <a href="#" class="link btn btn-tag btn-danger">Travel</a>
                                <a href="#" class="link btn btn-tag btn-success">Business</a>
                                <a href="#" class="link btn btn-tag btn-primary">Tech</a>
                                <a href="#" class="link btn btn-tag btn-warning">Gadgets</a>
                                <a href="#" class="link btn btn-tag btn-danger">Lifestyle</a>
                                <a href="#" class="link btn btn-tag btn-success">Vaccine</a>
                                <a href="#" class="link btn btn-tag btn-primary">Sports</a>
                                <a href="#" class="link btn btn-tag btn-warning">Covid-19</a>
                                <a href="#" class="link btn btn-tag btn-danger">Politice</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-item dropdown lifestyle">
                    <a href="#" class="list-link lifestyle">Learning <i class="ri-arrow-drop-down-line"></i></a>
                    <div class="container">
                        <div class="lifestyle-sections">
                            <div class="last-posts">
                                <div class="post">
                                    <a href="#"><img src="/image/1.jpg" alt="image" class="img img-lifestyle"></a>
                                    <a href="#" class="link">
                                        <h2 class="title">Google Spreadsheets</h2>
                                    </a>
                                </div>
                                <div class="post">
                                    <a href="#"><img src="/image/2.jpg" alt="image" class="img img-lifestyle"></a>
                                    <a href="#" class="link">
                                        <h2 class="title">Coming Very Soon...</h2>
                                    </a>
                                </div>
                                <div class="post">
                                    <a href="#"><img src="/image/3.jpg" alt="image" class="img img-lifestyle"></a>
                                    <a href="#" class="link">
                                        <h2 class="title">Coming Very Soon...</h2>
                                    </a>
                                </div>
                                <div class="post">
                                    <a href="#"><img src="/image/3.jpg" alt="image" class="img img-lifestyle"></a>
                                    <a href="#" class="link">
                                        <h2 class="title">Coming Very Soon...</h2>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-item dropdown">
                    <a href="#" class="list-link">Service</a>
                </li>
            </ul>
        </div>
        <div class="anothers-list flex">
            <a href="https://www.youtube.com/@koorsus?sub_confirmation=1" target="_blank" class="btn btn-subscribe"><i class="ri-youtube-fill font-size-3 mr"></i>Subscribe!</a>
            <button class="btn btn-navbar" id="navbarMenuBtn"><i class="ri-menu-fill"></i></button>
            <button class="btn btn-search" id="search"><i class="ri-search-line"></i></button>
            <div class="search" id="search-box">
                <input type="search" class="search-input" placeholder="Search...">
                <input type="submit" class="search-btn btn" value="Search">
            </div>
            <button class="btn btn-navbar" id="offcanvasMenu"><i class="ri-menu-3-fill"></i></button>
        </div>
    </div>
</div>
<!-- End navbar -->
<!-- Begin offcanvas -->
<div class="offcanvas" id="offcanvas">
    <button class="btn btn-close" id="offcanvasClose"><i class="ri-close-line close"></i></button>
    <div class="header">
        <div class="title">
            <a href="./index.html">
                <img src="/image/logobrand.png" alt="" class="img">
            </a>
        </div>
        <div class="content">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit dolorum numquam aperiam
                quam
                nihil in exercitationem laborum harum est delectus?</p>
        </div>
    </div>
    <div class="body">
        <ul class="list offcanvas-list">
            <li class="list-item"><a href="./index.html" class="list-link">Home</a></li>
            <li class="list-item"><a href="./about.html" class="list-link">About</a></li>
            <li class="list-item"><a href="#" class="list-link">Blog</a></li>
            <li class="list-item"><a href="./contact.html" class="list-link">Contact Us</a></li>
        </ul>
        <div class="membership">
            <span>Koorsus</span>
            <h2>Save on Premium Membership</h2>
            <span class="content">Get the insights report trusted by experts around the globe. Become a Member
                Today! lorem100</span>
            <a href="#" class="btn btn-plane link">View pricing plans</a>
        </div>
    </div>
    <div class="footer">
        <h3>Ardabil, Azerbaijan(F1)</h3>
        <p class="content">750 Sing Sing Rd, Horseheads, NY, 14845 Call: 469-537-2410 (Toll-free) </p>
        <a href="mailto:test@mail.com" class="link">test@mail.com</a>
    </div>
</div>
<div class="offcanvas offcanvas-navbar" id="offcanvasNavbar">
    <button class="btn btn-close" id="offcanvasNavbarClose"><i class="ri-close-line close"></i></button>
    <div class="body">
        <ul class="list offcanvas-list">
            <li class="list-item active">
                <a href="./index.html" class="list-link sm-list-link active">Home</a>
            </li>
            <li class="list-item">
                <a href="./posts.html" class="list-link sm-list-link">Post</a>
            </li>
            <li class="list-item">
                <a href="#" class="list-link sm-list-link">Lifestyle</a>
            </li>
            <li class="list-item">
                <a href="#" class="list-link sm-list-link">Dashboard</a>
            </li>
        </ul>
    </div>
    <div class="footer">
        <div class="membership">
            <span>The Blogzine!</span>
            <h2>Permiun Membership</h2>
            <span>Become a Member Today!</span>
            <a href="#" class="btn btn-plane link">View pricing plans</a>
        </div>
    </div>
</div>
<!-- End offcanvas -->