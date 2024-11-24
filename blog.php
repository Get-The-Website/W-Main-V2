<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Optimistx</title>

    <?php
        include 'include/css.php';
    ?>
</head>
<body>
<div class="site-wrapper">
    <!-- ======== 1.1. Header section ======== -->
    <?php
        include 'include/header.php';
    ?>
    <!-- ======== End of 1.1. Header section ========  -->
    <!-- ======== 4.1. SubPage_Hero section ========  -->
    <section class="SubPage_Hero">
        <div class="container">
            <div class="text-center" data-aos="zoom-in-up">
                <h1>Latest news</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua.</p>
            </div>
        </div>
    </section>
    <!-- ======== End of 4.1. SubPage_Hero section ========  -->
    <!-- ======== 1.12. Blog section ========  -->
    <section class="Blog">
        <div class="container">
            <div class="w-100 d-flex justify-content-center" data-aos="fade-up">
                <form action="#" class="d-flex w-75 justify-content-center align-items-center">
                    <input type="text" placeholder="Search Topic" required="" name="Search_Topic">
                    <button type="submit" class="hover2 ">Search</button>
                </form>
            </div>
            <div class="row gy-3">
                <div class="col-lg-6 col-md-6">
                    <div class="d-flex flex-column gap-md-4 gap-3 h-100">
                        <div class="position-relative w-100 h-50" data-aos="flip-left">
                            <figure>
                                <img class="w-100 h-100" src="assets/images/index/Blog_Img1.webp" alt="Blog1">
                            </figure>
                            <div class="position-absolute">
                                <p class="date">August 1, 2023</p>
                                <a href="#">
                                    <h5 class="w-75">Simple Ways To Optimize Your Website For SEO</h5>
                                </a>
                                <div class="d-flex align-items-center">
                                    <a href="#" class="hover5">Read More
                                        <i class="fa fa-arrow-right-long"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="position-relative w-100 h-50" data-aos="flip-left">
                            <figure>
                                <img class="w-100 h-100" src="assets/images/index/Blog_Img2.webp" alt="Blog2">
                            </figure>
                            <div class="position-absolute">
                                <p class="date">August 1, 2023</p>
                                <a href="#">
                                    <h5 class="w-75">Simple Ways To Optimize Your Website For SEO</h5>
                                </a>
                                <div class="d-flex align-items-center">
                                    <a href="#" class="hover5">Read More
                                        <i class="fa fa-arrow-right-long" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="d-flex flex-column gap-md-4 gap-3">
                        <div class="position-relative w-100" data-aos="flip-left">
                            <figure>
                                <img class="w-100 h-100" src="assets/images/index/Blog_Img5.webp" alt="Blog3">
                            </figure>
                            <div class="position-absolute">
                                <p class="date">August 1, 2023</p>
                                <a href="#">
                                    <h5 class="pb-0 w-75">Simple Ways To...</h5>
                                </a>
                            </div>
                        </div>
                        <div class="position-relative w-100" data-aos="flip-left">
                            <figure>
                                <img class="w-100 h-100" src="assets/images/index/Blog_Img4.webp" alt="Blog3">
                            </figure>
                            <div class="position-absolute">
                                <p class="date">August 1, 2023</p>
                                <a href="#">
                                    <h5 class="w-75">Simple Ways To Optimize Your Website For SEO</h5>
                                </a>
                                <div class="d-flex align-items-center">
                                    <a href="#" class="hover5">Read More
                                        <i class="fa fa-arrow-right-long" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======== End of 1.12. Blog section ========  -->
    <!-- ======== 1.12. Blog section ========  -->
    <section class="Blog Editors_Blog">
        <div class="container">
            <div class="d-flex flex-column justify-content-center align-items-center m-auto text-center"
                 data-aos="fade-up">
                <h4>Editors Choice</h4>
                <p class="w-75">
                    Lorem ipsum dolor sit amet consectetur. In nulla nunc arcu velit consectetur massa mauris
                    molestie
                    hac. Hac
                    arcu amet nullam pellentesque. Urna eu suspendisse felis sodales sit non.
                </p>
            </div>
            <div class="row gy-3">
                <div class="col-lg-6 col-md-6">
                    <div class="position-relative w-100" data-aos="flip-left">
                        <figure>
                            <img class="w-100 h-100" src="assets/images/index/Blog_Img6.webp" alt="Blog1">
                        </figure>
                        <div class="position-absolute">
                            <p class="date">August 1, 2023</p>
                            <a href="#">
                                <h5 class="w-75">Simple Ways To Optimize Your Website For SEO</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="position-relative w-100" data-aos="flip-left">
                        <figure>
                            <img class="w-100 h-100" src="assets/images/index/Blog_Img7.webp" alt="Blog1">
                        </figure>
                        <div class="position-absolute">
                            <p class="date">August 1, 2023</p>
                            <a href="#">
                                <h5 class="w-75">Simple Ways To Optimize Your Website For SEO</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======== End of 1.12. Blog section ========  -->
    <!-- ======== 1.15. Footer section ========  -->
    <?php
        include 'include/footer.php';
    ?>
    <!-- ======== End of 1.15. Footer section ========  -->
</div>

<?php
    include 'include/js.php';
?>
</body>
</html>