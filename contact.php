<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>ContactUs - Optimistx</title>
    <!-- favicon  -->
    <link href="assets/images/Fav_Icon.png" rel="shortcut icon" type="image/x-icon">
    <!-- faremwork of css -->
    <link href="assets/css/bootstrap-lib/bootstrap.min.css" rel="stylesheet">
    <!-- style sheet of css -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- Responsive sheet of css -->
    <link href="assets/css/responsive.css" rel="stylesheet">
    <!-- fonts awsome icon link  -->
    <link href="assets/font-awesome-lib/icon/font-awesome.min.css" rel="stylesheet">
    <!-- slick-slider link css -->
    <link href="assets/css/slick.min.css" rel="stylesheet">
    <!-- animation of css -->
    <link href="assets/css/aos.css" rel="stylesheet">
</head>

<body>
<div class="site-wrapper">
    <!-- ======== 1.1. Header section ======== -->
    <header>
        <nav class="navbar navbar-expand-lg container pt-lg-4 pt-3 pb-lg-4 pb-3" data-aos="fade-down">
            <div class="container-fluid">
                <!-- site logo -->
                <a class="nav-logo p-0" href="index.php">
                    <figure><img alt="logo" src="assets/images/logo.png"></figure>
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
                            <a class="nav-link " href="About.html">About</a>
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
                            <a class="nav-link active" href="ContactUs.html">Contact</a>
                        </li>
                    </ul>
                    <div>
                        <a class="hover1 down-btn" href="#" id="getStartedAnchor">Get Started</a>
                    </div>
                    <div class="Search_Icon">
                        <input class="Search_checkbox" name="Search_checkbox" type="radio">
                        <div class="Search_box">
                            <div class="iconContainer">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </div>
                            <input class="search_input" name="search_input" placeholder="search" type="text">
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <hr class="mb-0">
        <!--===== aside navigation slidebar =====-->
        <aside>
            <div class="right-sidbar" id="mySidenav">
                <div class="side-nav-logo d-flex justify-content-between align-items-center ps-2 pe-1 nav-logo">
                    <figure class="navbar-brand">
                        <a href="index.php">
                            <img alt="Logo" class="" src="assets/images/logo.png">
                        </a>
                    </figure>
                    <button class="fa-solid fa-xmark" onclick="close_aside()"></button>
                </div>
                <ul class="pt-4">
                    <li class="nav-item ">
                        <a aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="About.html">About</a>
                    </li>
                    <li class="nav-item active">
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
    <!-- ======== 3.1. Map section ========  -->
    <section class="Map">
        <h1 class="d-none">Lorem ipsum dolor sit.</h1>
        <iframe allowfullscreen=""
                data-aos="zoom-in-up" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d36692.198056712055!2d-122.45744662978882!3d37.77022795386011!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan%20Francisco%2C%20CA%2C%20USA!5e0!3m2!1sen!2s!4v1716969660518!5m2!1sen!2s" style="border:0; width:100%; height:432px;"></iframe>
    </section>
    <!-- ======== End of 3.1. Map section ========  -->
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
                    <input name="ContactName" placeholder="Your Name" required="" type="text">
                    <input name="ContactEmail" placeholder="Email" required="" type="email">
                </div>
                <input name="ContactNumber" placeholder="Phone Number" required="" type="tel">
                <textarea name="ContactComment" placeholder="Write here message" required="" rows="10"></textarea>
                <button type="submit">Send Message</button>
            </form>
            <div aria-hidden="true" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <img alt="submitIcon" src="assets/images/icons/Confirmation_1.gif">
                        <div>
                            <h4>Response Submitted</h4>
                            <h6>Your details have been successfully submitted. Thanks</h6>
                        </div>
                        <button class="hover1 m-auto" data-bs-dismiss="modal" type="button">Close</button>
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
                                <p><span class="__cf_email__" data-cfemail="453c2a30372b242820052028242c296b262a28">[email&#160;protected]</span>
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
                            <img alt="Footer_logo" src="assets/images/footer_Icon.svg">
                        </a>
                    </figure>
                    <form action="#" class="d-flex align-items-center gap-lg-4 gap-3 flex-md-row flex-column">
                        <input name="FooterEmail" placeholder="Subscribe Our newsletter" required="" type="email">
                        <button class="hover2" type="submit">Get Started</button>
                    </form>
                    <div aria-hidden="true" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false"
                         tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <img alt="submitIcon" src="assets/images/icons/Confirmation_1.gif">
                                <div>
                                    <h4>Response Submitted</h4>
                                    <h6>Your details have been successfully submitted. Thanks</h6>
                                </div>
                                <button class="hover1 m-auto" data-bs-dismiss="modal" type="button">Close</button>
                            </div>
                        </div>
                    </div>
                    <figure class="d-flex align-items-center gap-lg-4 gap-3">
                        <a href="ContactUs.html">
                            <i aria-hidden="true" class="fa-brands fa-facebook"></i>
                        </a>
                        <a href="ContactUs.html">
                            <i aria-hidden="true" class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="ContactUs.html">
                            <i aria-hidden="true" class="fa-brands fa-twitter"></i>
                        </a>
                        <a href="ContactUs.html">
                            <i aria-hidden="true" class="fa-brands fa-linkedin"></i>
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
            <svg class="progress-ring" height="69" width="69">
                <circle cx="34.5" cy="34.5" fill="transparent" r="30.5" stroke="#5c569a" stroke-width="4"></circle>
                <circle class="progress-ring__circle" cx="34.5" cy="34.5" fill="transparent" r="30.5"
                        stroke="white" stroke-width="4">
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
                d.innerHTML = "window.__CF$cv$params={r:'8e3e0b4b59ef7709',t:'MTczMTgyODkyOC4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";
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