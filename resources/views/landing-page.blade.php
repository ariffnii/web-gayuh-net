<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!---css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('sneat') }}/assets/css/style.css">

    <!---boxicons link-->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <!---remixixcon-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.6.0/fonts/remixicon.css" rel="stylesheet">

    <!---font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:wght@100;400;600&family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <header>
        <a href="" class="logo">Gayuh</a>

        <ul class="navlist">
            <li><a href="">Home</a></li>
            <li><a href="">About us</a></li>
            <li><a href="">Service</a></li>
            <li><a href="">Product</a></li>
            <li><a href="">special deals</a></li>
            <li><a href="">E-official store</a></li>
            <li>
                @if (Route::has('login'))
                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                        @auth
                            <a href="{{ route('logout') }}" class="ctta">Foto</a>
                        @else
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ctta">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </li>
        </ul>

        <div class="bx bx-menu" id="menu-icon"></div>
    </header>

    <section class="hero">
        <div class="hero-text">
            <h5>#Welcome gayuh</h5>
            <h4>Cibeng</h4>
            <h1>NIKMATI BERBAGAI PENAWARAN TERBAIK</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed, cum iste! Velit</p>
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a type="button" class="btn btn-primary" href="" data-bs-toggle="modal"
                            data-bs-target="#searchModal">Cek</a>
                        <!-- Modal Jangkauan-->
                        <!-- End Modal-->
                        <a href="{{ route('pelanggan.jangkauan_internet.index') }}">Pilih Paket</a>
                    @else
                        <a href="#">SHandy</a>
                        <a href="{{ route('login') }}" class="ctta"><i class="ri-login-box-fill"></i>Login ey</a>
                    @endauth
                </div>
            @endif
        </div>

        <div class="hero-img">
            <img src="{{ asset('sneat') }}/assets/img/orang2.png" alt="">
        </div>
    </section>

    <div class="icons">
        <a href="#"><i class="ri-instagram-line"></i></a>
        <a href="#"><i class="ri-youtube-line"></i></a>
        <a href="#"><i class="ri-dribbble-line"></i></a>
    </div>

    <div class="scroll-down">
        <a href=""><i class="ri-arrow-down-s-fill"></i></a>
    </div>

    <!---scroll link-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!---js link-->
    <script src="{{ asset('sneat') }}/assets/js/script.js"></script>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Internet Rumah dan Wi-Fi <br> serta TV Kabel Terbaik!</h1>
                <p>Nikmati Juaranya Internet dan Wi-Fi di dalam rumah <br> yang cepat dan unlimited ditambah tayangan TV
                    <br> berlangganan kualitas HD hingga 4K!
                </p>
                <h4>#LebihKencangLebihBebas</h4>
            </div>
        </div>
    </div>

    <div class="container1">
        <div class="square1"></div>
    </div>

    <div class="container2">
        <div class="square2"></div>
    </div>

    <div class="container3">
        <div class="square3"></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    @include('modal.search-jangkauan')
</body>

</html>
