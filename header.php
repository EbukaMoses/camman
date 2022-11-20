<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php if(isset($title)){ echo $title;} else{ echo 'Camman';} ?></title>
        <link href="fontawesome6.2.0/css/fontawesome.css" rel="stylesheet">
        <link href="fontawesome6.2.0/css/brands.css" rel="stylesheet">
        <link href="fontawesome6.2.0/css/solid.css" rel="stylesheet">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <!-- <section class="top_nav">
            <div class="container pt-2 pb-2">
                <div class="row">
                    <div class="col-md-6">
                        <div class="d-flex top_nav_group call_mail flex-xs-column">
                            <a href="#" class="top_nav_link"><i class="fa-solid fa-phone-volume"></i>
                                07030000000</a>&nbsp;&nbsp;&nbsp;
                            <a href="#" class="top_nav_link"><i class="fa-solid fa-envelope"></i> info@camman.com</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex top_nav_group justify-content-end">
                            <a href="" class="top_social"><i class="fa-brands fa-instagram pl-2 pr-2"></i></a>&nbsp;
                            <a href="" class="top_social"><i class="fa-brands fa-whatsapp pr-2"></i></a>&nbsp;
                            <a href="" class="top_social"> <i class="fa-brands fa-facebook pr-2"></i></a>&nbsp;
                            <a href="" class="top_social"><i class="fa-brands fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <header class="menu_wrapper">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a href="index.php" class="navbar-brand"><img src="image/logo.png" class="img-fluid" alt=""></a>

                    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu" area-controls="menu"
                        area-expanded="false" area-label="Toggle navigation"><i
                            class="fas fa-stream navbar-toggler-icon text-black"></i></button>
                    <div class="collapse navbar-collapse" id="menu">
                        <ul class="navbar-nav mx-auto mb-2mb-lg-0 ">
                            <li class="nav-item">
                                <a href="index.php" class="nav-link"><i class="fa-solid fa-house"></i> Home</a>
                            </li>
                            <!-- mega menu -->
                            <li class="nav-item dropdown dropdown-mega position-static">
                                <a href="" class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside"><i
                                        class="fa-solid fa-user-group"></i> Our
                                    Association</a>
                                <div class="dropdown-menu">
                                    <div class="mega-content px-md-4">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-lg-4 col-sm-6 py-4 px-xl-5 px-4">
                                                    <!-- <h5>Service</h5> -->
                                                    <div class="list-group">
                                                        <a href="about-us.php" class="list-group-item"><i
                                                                class="fa-solid fa-user"></i> Our Association</a>
                                                        <a href="board-of-directors.php" class="list-group-item"><i
                                                                class="fa-solid fa-user-plus"></i> Board of
                                                            Directors</a>

                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-6 py-4 px-xl-5 px-4">
                                                    <!-- <h5>Service</h5> -->
                                                    <div class="list-group">
                                                        <a href="supervisory-board.php" class="list-group-item"><i
                                                                class="fa-solid fa-user-plus"></i> Supervisory Board</a>
                                                        <a href="our-corporate-members.php" class="list-group-item"><i
                                                                class="fa-solid fa-briefcase"></i> Our members</a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-6 py-4 px-xl-5 px-4">
                                                    <!-- <h5>Service</h5> -->
                                                    <div class="list-group">
                                                        <a href="technical-committee.php" class="list-group-item"><i
                                                                class="fa-solid fa-paper-plane"></i> Technical
                                                            Committee</a>
                                                        <a href="./pdf/Kabloder_Tuzuk_Son.pdf"
                                                            class="list-group-item"><i
                                                                class="fa-solid fa-arrow-up-right-from-square"></i>
                                                            Association
                                                            Bylaws</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                    data-bs-auto-close="outside"><i class="fa-sharp fa-solid fa-volume-high"></i>
                                    News</a>
                                <ul class="dropdown-menu shadow">
                                    <li><a href="news.php" class="dropdown-item">News From Our Members</a></li>
                                    <li><a href="industry-news.php" class="dropdown-item">Industry News</a></li>
                                    <li><a href="summoning-orders.php" class="dropdown-item">Summoning Orders</a></li>
                                    <!-- DropdownLeft -->
                                    <!-- <li class="dropstart">
                                        <a href="" class="dropdown-item dropdown-toggle"
                                            data-bs-toggle="dropdown">Submeun Left</a>
                                        <ul class="dropdown-menu shadow">
                                            <li><a href="" class="dropdown-item">Level 1</a></li>
                                            <li><a href="" class="dropdown-item">Level 2</a></li>
                                            <li><a href="" class="dropdown-item">Level 3</a></li>
                                            <li><a href="" class="dropdown-item">Level 4</a></li>
                                        </ul>
                                    </li> -->
                                    <!-- Dropdown Right -->
                                    <!-- <li class="dropend">
                                        <a href="#" class="dropdown-item dropdown-toggle"
                                            data-bs-toggle="dropdown">Submeun Right</a>
                                        <ul class="dropdown-menu shadow">
                                            <li><a href="" class="dropdown-item">Level 1</a></li>
                                            <li><a href="" class="dropdown-item">Level 2</a></li>
                                            <li><a href="" class="dropdown-item">Level 3</a></li>

                                            <li class="dropend">
                                                <a href="#" class="dropdown-item dropdown-toggle"
                                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">Let's Go
                                                    Deeper!</a>
                                                <ul class="dropdown-menu dropdown-submenu shadow">
                                                    <li><a href="#" class="dropdown-item">Level 1</a></li>
                                                    <li><a href="#" class="dropdown-item">Level 2</a></li>
                                                    <li><a href="#" class="dropdown-item">Level 3</a></li>

                                                    <li class="dropend">
                                                        <a href="#" class="dropdown-item dropdown-toggle"
                                                            data-bs-toggle="dropdown" data-bs-auto-close="outside">Go
                                                            Music
                                                            Deeper!</a>
                                                        <ul class="dropdown-menu dropdown-submenu shadow">
                                                            <li><a href="#" class="dropdown-item">Level 1</a></li>
                                                            <li><a href="#" class="dropdown-item">Level 2</a></li>
                                                            <li><a href="#" class="dropdown-item">Level 3</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li> -->
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                    data-bs-auto-close="outside"><i class="fa-solid fa-link"></i>
                                    Related institutions</a>
                                <ul class="dropdown-menu shadow">
                                    <li><a href="national-links.php" class="dropdown-item">National Links</a></li>
                                    <li><a href="international-links.php" class="dropdown-item">International Links</a>
                                    </li>
                                    <li><a href="sectoral-fairs.php" class="dropdown-item">Sectoral Fairs</a>
                                    </li>

                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                    data-bs-auto-close="outside"><i class="fa-solid fa-bars"></i>
                                    Legislation</a>
                                <ul class="dropdown-menu shadow">
                                    <li><a href="standards.php" class="dropdown-item">Standards</a></li>
                                    <li><a href="" class="dropdown-item">Blog</a></li>

                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                    data-bs-auto-close="outside"><i
                                        class="fa-solid fa-wand-magic-sparkles"></i>Library</a>
                                <ul class="dropdown-menu shadow">
                                    <li><a href="technical-articles.php" class="dropdown-item">Technical Articles</a>
                                    </li>
                                    <li><a href="./pdf/Kabloder_Tuzuk_Son.pdf" class="dropdown-item">CPR – Construction
                                            Products Regulation
                                            Technical Guide</a></li>
                                    <!-- DropdownLeft -->

                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="communication.php" class="nav-link"><i class="fa-solid fa-location-dot"></i>
                                    Communication</a>
                            </li>


                            <!-- <li class="nav-item">
                                <a href="" class="nav-link disabled"> Disabled Link</a>
                            </li> -->
                        </ul>

                        <!-- <form action="" class="d-flex ms-auto">
                            <div class="input-group">
                                <input type="search" class="form-control search-btn" placeholder="Search..."
                                    area-label="search">
                                <button class="btn" type="submit">Search</button>
                            </div>
                        </form> -->
                    </div>
                </div>
            </nav>
        </header>