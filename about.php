<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Optimistx</title>
    <!-- favicon  -->
    <link rel="shortcut icon" href="assets/images/Fav_Icon.png" type="image/x-icon">
    <!-- faremwork of css -->
    <link rel="stylesheet" href="assets/css/bootstrap-lib/bootstrap.min.css">
    <!-- style sheet of css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive sheet of css -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- fonts awsome icon link  -->
    <link rel="stylesheet" href="assets/font-awesome-lib/icon/font-awesome.min.css">
    <!-- slick-slider link css -->
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <!-- animation of css -->
    <link rel="stylesheet" href="assets/css/aos.css">
</head>

<body>
<div class="site-wrapper">
    <!-- ======== 1.1. Header section ======== -->
    <header data-aos="fade-down">
        <nav class="navbar navbar-expand-lg container pt-lg-4 pt-3 pb-lg-4 pb-3">
            <div class="container-fluid">
                <!-- site logo -->
                <a class="nav-logo p-0" href="index.php">
                    <figure><img src="assets/images/logo.png" alt="logo"></figure>
                </a>
                <!-- navigation button  -->
                <button class="open-aside" onclick="open_aside()" type="button">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <!-- navigation bar manu  -->
                <div class="collapse navbar-collapse justify-content-end gap-xl-4 gap-lg-3" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex justify-content-center align-items-center gap-lg-3 gap-md-2 gap-sm-2 gap-2 mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="About.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Projects.html">Project</a>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link d-flex align-item-center gap-1" href="#">Pages<i
                                    class="fa-sharp fa-solid fa-sort-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="Services.html">Services</a></li>
                                <li>
                                    <a class="dropdown-item" href="ServicesDetail.html">Services Details</a>
                                </li>
                                <li><a class="dropdown-item" href="FAQ.html">FAQs</a></li>
                                <li><a class="dropdown-item" href="Team.html">Team</a></li>
                                <li>
                                    <a class="dropdown-item" href="Testimonial.html">Testimonials</a>
                                </li>
                                <li><a class="dropdown-item" href="404.html">404</a></li>
                                <li>
                                    <a class="dropdown-item" href="ComingSoon.html">Coming Soon</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Blog.html">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ContactUs.html">Contact</a>
                        </li>
                    </ul>
                    <div>
                        <a href="#" class="hover1 down-btn" id="getStartedAnchor">Get Started</a>
                    </div>
                    <div class="Search_Icon">
                        <input class="Search_checkbox" type="radio" name="Search_checkbox">
                        <div class="Search_box">
                            <div class="iconContainer">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </div>
                            <input class="search_input" placeholder="search" type="text" name="search_input">
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!--===== aside navigation slidebar =====-->
        <aside>
            <div id="mySidenav" class="right-sidbar">
                <div class="side-nav-logo d-flex justify-content-between align-items-center ps-2 pe-1 nav-logo">
                    <figure class="navbar-brand">
                        <a href="index.php">
                            <img src="assets/images/logo.png" alt="Logo" class="">
                        </a>
                    </figure>
                    <button class="fa-solid fa-xmark" onclick="close_aside()"></button>
                </div>
                <ul class="pt-4">
                    <li class="nav-item">
                        <a aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a href="About.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="ContactUs.html">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="Projects.html">Projects</a>
                    </li>
                    <li class="nav-item">
                        <div class="d-flex align-items-center justify-content-between" id="slid-btn">
                            <button class="a-slid page-btn">Pages</button>
                            <i class="fa-solid fa-caret-down pe-2"></i>
                        </div>
                        <ul id="slid-drop">
                            <li><a href="Services.html">Services</a></li>
                            <li><a href="ServicesDetail.html">Servics Detail</a></li>
                            <li><a href="FAQ.html">FAQ</a></li>
                            <li><a href="Team.html">Team</a></li>
                            <li><a href="Blog.html">Blog</a></li>
                            <li><a href="Testimonial.html">Testimonial</a></li>
                            <li><a href="404.html">404</a></li>
                            <li><a href="ComingSoon.html">Coming Soon</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </aside>
    </header>
    <!-- ======== End of 1.1. Header section ========  -->
    <!-- ======== 2.1. About_Hero section ========  -->
    <section class="About_Hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="d-flex justify-content-center flex-column h-100" data-aos="fade-up">
                        <h3>Holistic Digital Services All In One Place.</h3>
                        <p>Lorem ipsum dolor sit amet consectetur. In nulla nunc arcu velit consectetur
                            massa mauris
                            molestie hac. Hac arcu amet nullam pellentesque. Urna eu suspendisse felis sodales sit
                            non.
                        </p>
                        <div class="d-flex gap-lg-5 gap-3">
                            <div>
                                <a href="#" class="hover3">
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                    Get Started</a>
                            </div>
                            <div>
                                <a href="#" class="hover4">
                                    <i class="fa-solid fa-play d-flex justify-content-center align-items-center"></i>
                                    Watch Video</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="d-flex gap-4 mt-md-0 mt-sm-5 mt-4">
                        <div class="d-flex flex-column gap-4">
                            <figure data-aos="zoom-in-up">
                                <img class="rounded-circle" src="assets/images/About/About_Hero_Img1.webp"
                                     alt="About_Hero_Img1">
                            </figure>
                            <figure data-aos="zoom-in-up">
                                <img class="rounded-circle" src="assets/images/About/About_Hero_Img2.webp"
                                     alt="About_Hero_Img2">
                            </figure>
                        </div>
                        <figure data-aos="fade-down">
                            <img src="assets/images/About/About_Hero_Img3.webp" alt="About_Hero_Img3">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======== End of 2.1. About_Hero section ========  -->
    <!-- ======== 1.3. Features section ========  -->
    <section class="Features">
        <div class="container">
            <div class="Features_Star position-relative">
                <img class="position-absolute" src="assets/images/icons/Services_Star.svg" alt="Star_About">
            </div>
            <div class="row gy-lg-0 gy-4">
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex flex-column gap-lg-2 gap-3 h-100" data-aos="flip-left">
                        <h3>01</h3>
                        <h6 class="pt-2">Our Vision</h6>
                        <p class="pt-1">
                            Lorem ipsum dolor sit amet consectetur. Eget etiam eu mauris
                            gravida. Egestas ullamcorper dictum auctor hendrerit viverra.
                            Tempus etiam laoreet pretium aliquam blandit.
                        </p>
                        <div class="pt-lg-3">
                            <a href="#" class="hover3">
                                <i class="fa-solid fa-arrow-right-long"></i>
                                Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex flex-column gap-lg-2 gap-3 h-100" data-aos="flip-left">
                        <h3>02</h3>
                        <h6 class="pt-2">Our Mission</h6>
                        <p class="pt-1">
                            Lorem ipsum dolor sit amet consectetur. Eget etiam eu mauris
                            gravida. Egestas ullamcorper dictum auctor hendrerit viverra.
                            Tempus etiam laoreet pretium aliquam blandit.
                        </p>
                        <div class="pt-lg-3">
                            <a href="#" class="hover3">
                                <i class="fa-solid fa-arrow-right-long"></i>
                                Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex flex-column gap-lg-2 gap-3 h-100" data-aos="flip-left">
                        <h3>03</h3>
                        <h6 class="pt-2">24/7 Support</h6>
                        <p class="pt-1">
                            Lorem ipsum dolor sit amet consectetur. Eget etiam eu mauris
                            gravida. Egestas ullamcorper dictum auctor hendrerit viverra.
                            Tempus etiam laoreet pretium aliquam blandit.
                        </p>
                        <div class="pt-lg-3">
                            <a href="#" class="hover3">
                                <i class="fa-solid fa-arrow-right-long"></i>
                                Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex flex-column gap-lg-2 gap-3 h-100" data-aos="flip-left">
                        <h3>04</h3>
                        <h6 class="pt-2">Achievements </h6>
                        <p class="pt-1">
                            Lorem ipsum dolor sit amet consectetur. Eget etiam eu mauris
                            gravida. Egestas ullamcorper dictum auctor hendrerit viverra.
                            Tempus etiam laoreet pretium aliquam blandit.
                        </p>
                        <div class="pt-lg-3">
                            <a href="#" class="hover3">
                                <i class="fa-solid fa-arrow-right-long"></i>
                                Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======== End of 1.3. Features section ========  -->
    <!-- ======== 1.7. Company section ========  -->
    <section class="Company pt-0">
        <div class="container">
            <div class="row flex-md-row flex-column-reverse">
                <div class="col-lg-6 col-md-6">
                    <div class="d-flex h-100 align-items-center justify-content-center position-relative pe-lg-4">
                        <div class="m-0">
                            <figure class="Gradient_Circle"></figure>
                            <figure class="position-absolute">
                                <img src="assets/images/icons/hero_dots.svg" alt="Dots">
                            </figure>
                            <figure class="bottom-0 p-0">
                                <img src="assets/images/icons/Company_Flower.svg" alt="Flower">
                            </figure>
                        </div>
                        <figure class="w-100 h-100" data-aos="fade-down">
                            <img class="w-100 h-100" src="assets/images/index/company_Img1.webp" alt="CompanyImg">
                        </figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div data-aos="fade-up">
                        <div class="pe-lg-5 pe-3">
                            <h4 class="w-75">Web Design Company That You Can Trust</h4>
                            <p class="pt-3 pb-lg-4 pb-4 pe-lg-5">
                                Lorem ipsum dolor sit amet consectetur. Eget etiam eu mauris
                                gravida. Egestas ullamcorper dictum auctor hendrerit
                                viverra.
                            </p>
                        </div>
                        <div class="d-flex flex-md-column gap-lg-4 gap-3">
                            <div class="d-flex flex-column">
                                <h6>Competitive Rates</h6>
                                <p class="pt-3">
                                    Lorem ipsum dolor sit amet consectetur. Eget etiam eu
                                    mauris gravida. Egestas ullamcorper dictum auctor
                                    hendrerit viverra. Tempus etiam laoreet pretium aliquam
                                    blandit. Diam lectus volutpat eu id purus odio.
                                </p>
                            </div>
                            <div class="d-flex flex-column">
                                <h6>Premium Development</h6>
                                <p class="pt-3">
                                    Lorem ipsum dolor sit amet consectetur. Eget etiam eu
                                    mauris gravida. Egestas ullamcorper dictum auctor
                                    hendrerit viverra. Tempus etiam laoreet pretium aliquam
                                    blandit. Diam lectus volutpat eu id purus odio.
                                </p>
                            </div>
                            <div class="d-flex flex-column">
                                <h6>No Contracts Needed</h6>
                                <p class="pt-3">
                                    Lorem ipsum dolor sit amet consectetur. Eget etiam eu
                                    mauris gravida. Egestas ullamcorper dictum auctor
                                    hendrerit viverra. Tempus etiam laoreet pretium aliquam
                                    blandit. Diam lectus volutpat eu id purus odio.
                                </p>
                            </div>
                        </div>
                        <div class="mt-lg-5 pt-lg-0 pt-4 ps-lg-4 ps-3">
                            <a href="Services.html" class="hover3">
                                <i class="fa fa-long-arrow-right"></i>
                                Get Started
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======== End of 1.7. Company section ========  -->
    <!-- ======== 1.6. Video section ========  -->
    <section class="Video">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center gap-lg-5 gap-4 flex-column text-center"
                 data-aos="zoom-in-up">
                <div>
                    <a>
                        <i class="fa fa-play ps-1 d-flex justify-content-center align-items-center"
                           data-bs-toggle="modal" data-bs-target="#staticBackdropVideo" aria-hidden="true"></i>
                    </a>
                </div>
                <h2>We Think, We Design, We Create</h2>
                <div class="mt-sm-4 mt-sm-3 mt-2">
                    <a href="ContactUs.html" class="hover2">Contact Us Today!</a>
                </div>
            </div>
        </div>
        <div class="modal fade" id="staticBackdropVideo" data-bs-backdrop="static" data-bs-keyboard="false"
             tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered h-100 my-0 mx-auto">
                <div class="modal-content d-flex align-items-center justify-content-center border-0">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                class="fa-solid fa-xmark"></i></button>
                        <iframe src="https://www.youtube.com/embed/u31qwQUeGuM?si=o1Nt3XrgyYRKwJ13"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======== End of 1.6. Video section ========  -->
    <!-- ======== 2.2. Team section ========  -->
    <section class="Team">
        <div class="container">
            <div class="text-center d-flex align-items-center w-75 mx-auto flex-column" data-aos="fade-up">
                <h4>About Our Team</h4>
                <p>
                    Lorem ipsum dolor sit amet consectetur. Eget etiam eu mauris gravida. Egestas ullamcorper dictum
                    auctor
                    hendrerit viverra. Tempus etiam laoreet pretium aliquam blandit.
                </p>
            </div>
            <div class="row gy-lg-0 gy-4">
                <div class="col-md-3 col-sm-6">
                    <div class="d-flex flex-column align-items-center h-100" data-aos="flip-left">
                        <figure class="w-100">
                            <img class="w-100" src="assets/images/index/Team_Member1.webp" alt="Team_Member1">
                            <div class="Team_overlay d-flex flex-column justify-content-center align-items-center gap-lg-4 gap-3">
                                <div class="Team_social_icons mt-lg-5 mt-4">
                                    <a href="#">
                                        <i class="fa-brands fa-facebook"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-brands fa-whatsapp"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                </div>
                                <div class="mt-lg-4 mt-3">
                                    <a href="#" class="hover5">View Detail
                                        <i class="fa fa-arrow-right-long"></i>
                                    </a>
                                </div>
                            </div>
                        </figure>
                        <div class="text-center d-flex flex-column gap-2 w-100">
                            <h6>Noah Maxwell</h6>
                            <p>Product Manager</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="d-flex flex-column align-items-center h-100" data-aos="flip-left">
                        <figure class="w-100">
                            <img class="w-100" src="assets/images/index/Team_Member2.webp" alt="Team_Member1">
                            <div class="Team_overlay d-flex flex-column justify-content-center align-items-center gap-lg-4 gap-3">
                                <div class="Team_social_icons mt-lg-5 mt-4">
                                    <a href="#">
                                        <i class="fa-brands fa-facebook"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-brands fa-whatsapp"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-brands fa-instagram"></i></a>
                                </div>
                                <div class="mt-lg-4 mt-3">
                                    <a href="#" class="hover5">View Detail
                                        <i class="fa fa-arrow-right-long"></i>
                                    </a>
                                </div>
                            </div>
                        </figure>
                        <div class="text-center d-flex flex-column gap-2 w-100">
                            <h6>Emma Watson</h6>
                            <p>DevOps Engineer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="d-flex flex-column align-items-center h-100" data-aos="flip-left">
                        <figure class="w-100">
                            <img class="w-100" src="assets/images/index/Team_Member3.webp" alt="Team_Member1">
                            <div class="Team_overlay d-flex flex-column justify-content-center align-items-center gap-lg-4 gap-3">
                                <div class="Team_social_icons mt-lg-5 mt-4">
                                    <a href="#">
                                        <i class="fa-brands fa-facebook"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-brands fa-whatsapp"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-brands fa-instagram"></i></a>
                                </div>
                                <div class="mt-lg-4 mt-3">
                                    <a href="#" class="hover5">View Detail
                                        <i class="fa fa-arrow-right-long"></i>
                                    </a>
                                </div>
                            </div>
                        </figure>
                        <div class="text-center d-flex flex-column gap-2 w-100">
                            <h6>Ethan</h6>
                            <p>UI/UX Designer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="d-flex flex-column align-items-center h-100" data-aos="flip-left">
                        <figure class="w-100">
                            <img class="w-100" src="assets/images/index/Team_Member4.webp" alt="Team_Member1">
                            <div class="Team_overlay d-flex flex-column justify-content-center align-items-center gap-lg-4 gap-3">
                                <div class="Team_social_icons mt-lg-5 mt-4">
                                    <a href="#">
                                        <i class="fa-brands fa-facebook"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-brands fa-whatsapp"></i>

                                    </a>
                                    <a href="#">
                                        <i class="fa-brands fa-instagram"></i></a>
                                </div>
                                <div class="mt-lg-4 mt-3">
                                    <a href="#" class="hover5">View Detail
                                        <i class="fa fa-arrow-right-long"></i>
                                    </a>
                                </div>
                            </div>
                        </figure>
                        <div class="text-center d-flex flex-column gap-2 w-100">
                            <h6>Isabella</h6>
                            <p>Data Analyst</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======== End of 2.2. Team section ========  -->
    <!-- ======== End of 1.8. Stats section ========  -->
    <section class="Stats">
        <div class="container">
            <div class="d-flex flex-column justify-content-center align-items-center w-75 m-auto text-center"
                 data-aos="fade-up">
                <h4>Our Company Growth</h4>
                <p>
                    Lorem ipsum dolor sit amet consectetur. Eget etiam eu mauris
                    gravida. Egestas ullamcorper dictum auctor hendrerit viverra.
                </p>
            </div>
            <div class="row mt-lg-5 mt-4">
                <div class="col-lg-3 col-md-6 p-0">
                    <div class="d-flex flex-column" data-aos="flip-left">
                        <p class="pe-lg-5">
                            Lorem ipsum dolor sit amet consectetur. Eget etiam eu mauris
                            gravida. Egestas ullamcorper dictum auctor hendrerit viverra.
                            Tempus etiam laoreet pretium aliquam blandit. Diam lectus
                            volutpat eu id purus odio.
                        </p>
                        <div class="d-flex flex-column justify-content-center align-items-center gap-lg-3 gap-2">
                            <h3><span class="number" data-final-value="1286"></span>+</h3>
                            <p>Brands Joined</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 p-0">
                    <div class="d-flex flex-column" data-aos="flip-left">
                        <div class="d-flex flex-column justify-content-center align-items-center gap-lg-3 gap-2">
                            <h3><span class="number" data-final-value="3460"></span>+</h3>
                            <p>Satisfied Clients</p>
                        </div>
                        <p class="pe-lg-5">
                            Lorem ipsum dolor sit amet consectetur. Eget etiam eu mauris
                            gravida. Egestas ullamcorper dictum auctor hendrerit viverra.
                            Tempus etiam laoreet pretium aliquam blandit. Diam lectus
                            volutpat eu id purus odio.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 p-0">
                    <div class="d-flex flex-column" data-aos="flip-left">
                        <p class="pe-lg-5">
                            Lorem ipsum dolor sit amet consectetur. Eget etiam eu mauris
                            gravida. Egestas ullamcorper dictum auctor hendrerit viverra.
                            Tempus etiam laoreet pretium aliquam blandit. Diam lectus
                            volutpat eu id purus odio.
                        </p>
                        <div class="d-flex flex-column justify-content-center align-items-center gap-lg-3 gap-2">
                            <h3><span class="number" data-final-value="2861"></span>+
                            </h3>
                            <p>Brands Joined</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 p-0">
                    <div class="d-flex flex-column" data-aos="flip-left">
                        <div class="d-flex flex-column justify-content-center align-items-center gap-lg-3 gap-2">
                            <h3><span class="number" data-final-value="8550"></span>
                                +</h3>
                            <p>Successful Campaigns</p>
                        </div>
                        <p class="pe-lg-5">
                            Lorem ipsum dolor sit amet consectetur. Eget etiam eu mauris
                            gravida. Egestas ullamcorper dictum auctor hendrerit viverra.
                            Tempus etiam laoreet pretium aliquam blandit. Diam lectus
                            volutpat eu id purus odio.
                        </p>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center gap-3">
                <div>
                    <a class="hover2" href="#">Learn More</a>
                </div>
                <div>
                    <a href="#" class="hover4">
                        <i class="fa-solid fa-play d-flex justify-content-center align-items-center"></i>
                        Watch Video</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ======== End of 1.8. Stats section ========  -->
    <!-- ======== 1.4. Goal section ========  -->
    <section class="Goal About_Goal">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="position-relative mt-lg-0 mt-md-5">
                        <figure class="position-relative d-flex justify-content-end">
                            <img src="assets/images/icons/hero_dots.svg" alt="dots">
                        </figure>
                        <figure data-aos="fade-up">
                            <img class="w-100" src="assets/images/index/Goal_img.webp" alt="Goal_Img">
                        </figure>
                        <figure class="position-absolute">
                            <img src="assets/images/icons/goal_doddle.svg" alt="doddle">
                        </figure>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex flex-column gap-sm-4 gap-3 justify-content-between mt-lg-3" data-aos="fade-up">
                        <h4>Our Main Goal Is To Satisfy Local Clients</h4>
                        <h6 class="pe-lg-2">
                            Ad nec unum copiosae. Sea ex everti labores, ad option iuvaret
                            qui muva.
                        </h6>
                        <p>
                            Lorem ipsum dolor sit amet consectetur. Eget etiam eu mauris
                            gravida. Egestas ullamcorper dictum auctor hendrerit viverra.
                            Tempus etiam laoreet pretium aliquam blandit. Diam lectus
                            volutpat eu id purus odio. Aliquam tincidunt sed est at
                            ultrices. Nibh a egestas scelerisque mauris porta. Leo leo in
                            duis pulvinar magnis venenatis faucibus malesuada.
                        </p>
                        <div class="d-flex gap-lg-3 gap-3 flex-wrap py-lg-3 py-2">
                            <h6>The Briefing</h6>
                            <h6>Analysing</h6>
                            <h6>Design and Adaptive</h6>
                            <h6>Development</h6>
                            <h6>Search Engine Optimization</h6>
                        </div>
                        <div class="d-flex gap-lg-5 gap-4 align-items-center py-lg-3 py-2">
                            <div>
                                <a class="hover3" href="Testimonial.html">
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                    Get Started
                                </a>
                            </div>
                            <div>
                                <a href="Testimonial.html" class="hover2">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======== End of 1.4. Goal section ========  -->
    <!-- ======== 1.13. Partners section ========  -->
    <section class="Partners">
        <div class="container">
            <div class="d-flex flex-column justify-content-center align-items-center mx-auto text-center"
                 data-aos="fade-up">
                <h4>Companies We Love</h4>
                <p>
                    Lorem ipsum dolor sit amet consectetur. In nulla nunc arcu velit
                    consectetur massa mauris molestie hac.
                </p>
            </div>
            <div class="row">
                <div class="Partners_Slider1 my-lg-4 my-3 d-flex gap-lg-4" data-aos="zoom-in-up">
                    <figure>
                        <a href="#"><img src="assets/images/icons/Partner_1.svg" alt="logo1"></a>
                    </figure>
                    <figure>
                        <a href="#"><img src="assets/images/icons/Partner_2.svg" alt="logo2"></a>
                    </figure>
                    <figure>
                        <a href="#"><img src="assets/images/icons/Partner_3.svg" alt="logo3"></a>
                    </figure>
                    <figure>
                        <a href="#"><img src="assets/images/icons/Partner_4.svg" alt="logo4"></a>
                    </figure>
                    <figure>
                        <a href="#"><img src="assets/images/icons/Partner_5.svg" alt="logo5"></a>
                    </figure>
                    <figure>
                        <a href="#"><img src="assets/images/icons/Partner_6.svg" alt="logo6"></a>
                    </figure>
                    <figure>
                        <a href="#"><img src="assets/images/icons/Partner_1.svg" alt="logo1"></a>
                    </figure>
                    <figure>
                        <a href="#"><img src="assets/images/icons/Partner_2.svg" alt="logo2"></a>
                    </figure>
                    <figure>
                        <a href="#"><img src="assets/images/icons/Partner_3.svg" alt="logo3"></a>
                    </figure>
                    <figure>
                        <a href="#"><img src="assets/images/icons/Partner_4.svg" alt="logo4"></a>
                    </figure>
                    <figure>
                        <a href="#"><img src="assets/images/icons/Partner_5.svg" alt="logo5"></a>
                    </figure>
                    <figure>
                        <a href="#"><img src="assets/images/icons/Partner_6.svg" alt="logo6"></a>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <!-- ======== End of 1.13. Partners section ========  -->
    <!-- ======== 1.14. ContactUs section ========  -->
    <section class="ContactUs">
        <div class="container px-md-5">
            <div data-aos="fade-up">
                <h1>Let’s Talk</h1>
                <p class="w-50">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
            <form class="mt-lg-5 mt-4 d-flex flex-column gap-lg-5 gap-4" data-aos="fade-up">
                <div class="d-flex gap-lg-5 gap-4 w-100 flex-sm-row flex-column">
                    <input name="ContactName" type="text" placeholder="Your Name" required="">
                    <input name="ContactEmail" type="email" placeholder="Email" required="">
                </div>
                <input name="ContactNumber" type="tel" placeholder="Phone Number" required="">
                <textarea name="ContactComment" placeholder="Write here message" rows="10" required=""></textarea>
                <button type="submit">Send Message</button>
            </form>
            <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <img src="assets/images/icons/Confirmation_1.gif" alt="submitIcon">
                        <div>
                            <h4>Response Submitted</h4>
                            <h6>Your details have been successfully submitted. Thanks</h6>
                        </div>
                        <button type="button" class="hover1 m-auto" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======== End of 1.14. ContactUs section ========  -->
    <!-- ======== 1.15. Footer section ========  -->
    <footer>
        <div class="container">
            <div class="d-flex flex-md-column flex-row-reverse w-100">
                <div class="d-flex justify-content-between align-items-md-center gap-md-4 gap-3">
                    <a href="ContactUs.html">
                        <div class="d-flex gap-lg-4 gap-2 align-items-center">
                            <figure class="d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-home"></i>
                            </figure>
                            <div class="d-flex flex-column gap-1">
                                <h6>Company Name</h6>
                                <p>Plaza XYZ Street, XYZ City. XYZ</p>
                            </div>
                        </div>
                    </a>
                    <a href="ContactUs.html">
                        <div class="d-flex gap-lg-4 gap-2 align-items-center">
                            <figure class="d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-envelope"></i>
                            </figure>
                            <div class="d-flex flex-column gap-1">
                                <h6>Email Address</h6>
                                <p><span class="__cf_email__" data-cfemail="136a7c66617d727e7653767e727a7f3d707c7e">[email&#160;protected]</span>
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href="ContactUs.html">
                        <div class="d-flex gap-lg-4 gap-2 align-items-center">
                            <figure class="d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-phone"></i>
                            </figure>
                            <div class="d-flex flex-column gap-1">
                                <h6>Phone Number</h6>
                                <p>123-4567-890</p>
                            </div>
                        </div>
                    </a>
                </div>
                <hr>
                <div class="d-flex justify-content-between align-items-md-center px-lg-0 px-md-3">
                    <figure>
                        <a href="index.php">
                            <img src="assets/images/footer_Icon.svg" alt="Footer_logo">
                        </a>
                    </figure>
                    <form action="#" class="d-flex align-items-center gap-lg-4 gap-3 flex-md-row flex-column">
                        <input name="FooterEmail" type="email" placeholder="Subscribe Our newsletter" required="">
                        <button type="submit" class="hover2">Get Started</button>
                    </form>
                    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <img src="assets/images/icons/Confirmation_1.gif" alt="submitIcon">
                                <div>
                                    <h4>Response Submitted</h4>
                                    <h6>Your details have been successfully submitted. Thanks</h6>
                                </div>
                                <button type="button" class="hover1 m-auto" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                    <figure class="d-flex align-items-center gap-lg-4 gap-3">
                        <a href="ContactUs.html">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                        <a href="ContactUs.html">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="ContactUs.html">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                        <a href="ContactUs.html">
                            <i class="fa-brands fa-linkedin"></i>
                        </a>
                    </figure>
                </div>
            </div>
            <hr>
            <div class="d-flex justify-content-between align-items-center flex-sm-row flex-column text-center gap-3 w-100 ">
                <p>
                    Copyright &copy; <span id="year"></span> Optimistx By
                    Evonicmedia. All Rights Reserved.
                </p>
                <p>Powered by Evonicsoft</p>
            </div>
        </div>
        <!-- scroll to top  -->
        <button class="scrollToTopButton">
            <svg class="progress-ring" width="69" height="69">
                <circle stroke="#5c569a" stroke-width="4" fill="transparent" r="30.5" cx="34.5" cy="34.5"></circle>
                <circle class="progress-ring__circle" stroke="white" stroke-width="4" fill="transparent" r="30.5"
                        cx="34.5" cy="34.5">
                </circle>
            </svg>
            <span class="icon"></span>
        </button>
    </footer>
    <!-- ======== End of 1.15. Footer section ========  -->
</div>

<!-- bootstrap min javascript -->
<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="assets/js/javascript-lib/bootstrap.min.js"></script>
<!-- j Query -->
<script src="assets/js/jquery.js"></script>
<!-- slick slider js -->
<script src="assets/js/slick.min.js"></script>
<!-- main javascript -->
<script src="assets/js/custom.js"></script>
<!-- animation from javascript -->
<script src="assets/js/aos.js"></script>
<script>
    AOS.init({
        once: true,
        duration: 1500,
    });
</script>
<script>(function () {
        function c() {
            var b = a.contentDocument || a.contentWindow.document;
            if (b) {
                var d = b.createElement('script');
                d.innerHTML = "window.__CF$cv$params={r:'8e3e0ad10b9e7709',t:'MTczMTgyODkwOC4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";
                b.getElementsByTagName('head')[0].appendChild(d)
            }
        }

        if (document.body) {
            var a = document.createElement('iframe');
            a.height = 1;
            a.width = 1;
            a.style.position = 'absolute';
            a.style.top = 0;
            a.style.left = 0;
            a.style.border = 'none';
            a.style.visibility = 'hidden';
            document.body.appendChild(a);
            if ('loading' !== document.readyState) c(); else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c); else {
                var e = document.onreadystatechange || function () {
                };
                document.onreadystatechange = function (b) {
                    e(b);
                    'loading' !== document.readyState && (document.onreadystatechange = e, c())
                }
            }
        }
    })();</script>
</body>

</html>