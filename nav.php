<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
    <link rel="stylesheet" type="text/css" href="./slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="./sass/style.css" />
    <title>Arash</title>
</head>

<body>
    <!-- Navbar section start -->
    <section id="top_navbar" class="d-none d-md-block">
        <div class="container">
            <div class="top__nav">
                <div class="contact__information">
                    <ul>
                        <li>
                            <img src="./img/phone.png" /><a href="tel:+99412 497 47 03">+99412 497 47 03</a>
                        </li>
                        <li><img src="./img/time.png" /><a href="#">09:00-18:00</a></li>
                        <li>
                            <img src="./img/location.png" /><a href="#">F.İbrahimbəyov küç.19</a>
                        </li>
                    </ul>
                </div>
                <div class="sosial__media d-flex">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <div class="dropdown language">
                        <button class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            AZ
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">EN</a></li>
                            <li><a class="dropdown-item" href="#">AZ</a></li>
                            <li><a class="dropdown-item" href="#">RU</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Navbar section end desktop -->
    <section id="bottom_navbar" class="d-none d-md-block">
        <div class="botton__nav">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <div class="container">
                    <a class="navbar-brand" href="index.php">
                        <img src="./img/logo.png" />
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item dropdown has-megamenu active">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Məhsullar</a>
                                <div class="dropdown-menu megamenu" role="menu">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12 col-md-6 col-lg-3">
                                                <div class="item">
                                                    <a href="equipment.php">
                                                        <h5>Stomatolojı avadanlıq</h5>
                                                    </a>
                                                    <ul>
                                                        <li><a href="equipment-detail.php">Ajax Medical</a></li>
                                                        <li><a href="#">Meta-Biomed</a></li>
                                                        <li><a href="#">Anthogyr</a></li>
                                                        <li><a href="#">Digimed</a></li>
                                                        <li><a href="#">Digimed</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-3">
                                                <div class="item">
                                                    <a href="equipment.php">
                                                        <h5>Lazer və kosmetoloji avadanlıq</h5>
                                                    </a>
                                                    <div class="d-flex">
                                                        <ul class="me-5">
                                                            <li><a href="equipment-detail.php">Ajax Medical</a></li>
                                                            <li><a href="#">Meta-Biomed</a></li>
                                                            <li><a href="#">Anthogyr</a></li>
                                                            <li><a href="#">Digimed</a></li>
                                                            <li><a href="#">Digimed</a></li>
                                                        </ul>
                                                        <ul>
                                                            <li><a href="equipment-detail.php">Ajax Medical</a></li>
                                                            <li><a href="#">Meta-Biomed</a></li>
                                                            <li><a href="#">Anthogyr</a></li>
                                                            <li><a href="#">Digimed</a></li>
                                                            <li><a href="#">Digimed</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-3">
                                                <div class="item">
                                                    <a href="equipment.php">
                                                        <h5>Kosmetologiya</h5>
                                                    </a>
                                                    <ul>
                                                        <li><a href="#">Ajax Medical</a></li>
                                                        <li><a href="#">Meta-Biomed</a></li>
                                                        <li><a href="#">Anthogyr</a></li>
                                                        <li><a href="#">Digimed</a></li>
                                                        <li><a href="#">Digimed</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-3">
                                                <div class="item">
                                                    <a href="equipment.php">
                                                        <h5>Stomatoloji preparatlar</h5>
                                                    </a>
                                                    <ul>
                                                        <li><a href="#">Septodont </a></li>
                                                        <li><a href="#">Cavex </a></li>
                                                        <li><a href="#">Meta-Biomed</a></li>
                                                        <li><a href="#">Tokuyama Dental</a></li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div> <!-- dropdown-mega-menu.// -->
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="service.php">Servis</a>
                            </li>
                            <!--                            <li class="nav-item">-->
                            <!--                                <a class="nav-link" href="delivery.php">Çatdırılma</a>-->
                            <!--                            </li>-->

                            <li class="nav-item">
                                <a class="nav-link" href="about.php">Haqqımızda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="media.php">Media</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Əlaqə</a>
                            </li>
                        </ul>
                        <button type="button" class="openBtn border-0 outline-0 bg-transparent" onclick="openSearch()">
                            <img src="./img/search.png" />
                        </button>
                        <div id="myOverlay" class="overlay  animate__animated animate__backInLeft">
                            <div class="container">
                                <div class="closebtn" onclick="closeSearch()" title="Close Overlay">
                                    <img src="./img/cancel.png" />
                                </div>
                                <div class="overlay-content">
                                    <form action="#" class="d-flex justify-content-between">
                                        <input type="text" placeholder="Axtar..." name="search" />
                                        <button type="button" class="border-0 outline-0 bg-transparent">
                                            <img src="./img/search.png" />
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </section>
    <!-- Navbar section end mobile -->
    <section class="botton__nav d-block d-md-none">

        <nav class="navbar navbar-light ">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="./img/logo.png" />
                </a>
                <div class="d-flex align-items-center">
                    <div class="dropdown language">
                        <button class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            AZ
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">EN</a></li>
                            <li><a class="dropdown-item" href="#">AZ</a></li>
                            <li><a class="dropdown-item" href="#">RU</a></li>
                        </ul>
                    </div>
                    <button id="ChangeToggle" class="border-0 navbar-toggler " type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <div id="open">
                            <span class="navbar-toggler-icon"></span>
                        </div>
                        <div id="close" class="d-none">
                            X
                        </div>
                    </button>
                </div>
                <div class="overlayy">
                    <form action="#" class="d-flex justify-content-between">
                        <input type="text" placeholder="Axtar..." name="search" />
                        <button type="button" class="border-0 outline-0 bg-transparent">
                            <img src="./img/search.png" />
                        </button>
                    </form>
                </div>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-body p-0">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item">
                                <button type="button"
                                    class="menu-btn border-0 bg-transparent d-flex  justify-content-between align-items-center"
                                    data-bs-toggle="modal" data-bs-target="#product-menu">
                                    <span> Məhsullar</span>
                                    <i class="bi bi-chevron-right"></i>
                                </button>
                                <div class="modal fade" id="product-menu" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog m-0">
                                        <div class="modal-content border-0">

                                            <div class="modal-body">
                                                <ul class="navbar-nav-menu m-auto">
                                                    <li class="nav-item-menu ">
                                                        <div class="nav-link-menu-heading d-flex">
                                                            <button type="button" class="border-0 bg-transparent "
                                                                data-bs-dismiss="modal">
                                                                <i class="bi bi-chevron-left"></i>
                                                            </button>
                                                            <h5 class="mx-3" id="exampleModalLabel">Məhsullar</h5>
                                                        </div>
                                                    </li>
                                                    <li class="nav-item-menu">
                                                        <a class="nav-link-menu " aria-current="page"
                                                            href="service.php">Servis</a>
                                                    </li>
                                                    <li class="nav-item-menu">
                                                        <a class="nav-link-menu" href="about.php">Haqqımızda</a>
                                                    </li>
                                                    <li class="nav-item-menu">
                                                        <a class="nav-link-menu" href="media.php">Media</a>
                                                    </li>
                                                    <li class="nav-item-menu">
                                                        <a class="nav-link-menu" href="contact.php">Əlaqə</a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="service.php">Servis</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php">Haqqımızda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="media.php">Media</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Əlaqə</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </nav>

    </section>