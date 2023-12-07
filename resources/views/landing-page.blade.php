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
        </ul>

        <div class="bx bx-menu" id="menu-icon"></div>
    </header>
    
    <section class="hero">
        <div class="hero-text">
            <h5>#Welcome gayuh</h5>
            <h4>Cibeng</h4>
            <h1>NIKMATI BERBAGAI PENAWARAN TERBAIK</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed, cum iste! Velit</p>
            <a href="#">SHandy</a>
            <a href="{{ route('login') }}" class="ctta"><i class="ri-login-box-fill"></i>Login ey</a>
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
                    <br> berlangganan kualitas HD hingga 4K!</p>
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



</body>

</html>