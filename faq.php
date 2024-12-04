<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Get The Website - FAQ</title>

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
            <div class="text-center" data-aos="zoom-in-down">
                <h1>Questions?</h1>
                <p>If you have any questions regarding our services like web development, mobile app development, SEO, or digital solutions, we are here to help! Find answers to some of the most common queries below.</p>
            </div>
        </div>
    </section>
    <!-- ======== End of 4.1. SubPage_Hero section ======== -->
    <!-- ======== 7.1. FAQ section ========  -->
    <section class="FAQ">
        <div class="container">
            <div class="row gy-md-0 gy-4">
                <div class="col-lg-7 col-md-7">
                    <div class="accordion" data-aos="fade-up" id="accordionExample">
                        <!-- FAQ 1: Web Development -->
                        <div class="accordion-item">
                            <h6 class="accordion-header">
                                <button aria-controls="collapseOne" aria-expanded="true" class="accordion-button" data-bs-target="#collapseOne" data-bs-toggle="collapse" type="button">
                                    What is the process for developing a custom website?
                                </button>
                            </h6>
                            <div class="accordion-collapse collapse show" data-bs-parent="#accordionExample" id="collapseOne">
                                <div class="accordion-body">
                                    <p>Our web development process involves understanding your business goals, designing a tailored solution, developing the website, and rigorously testing it before launch. We use modern technologies such as HTML5, CSS3, and JavaScript frameworks to create a responsive and user-friendly website.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ 2: Mobile App Development -->
                        <div class="accordion-item">
                            <h6 class="accordion-header">
                                <button aria-controls="collapseTwo" aria-expanded="false" class="accordion-button collapsed" data-bs-target="#collapseTwo" data-bs-toggle="collapse" type="button">
                                    How do you develop mobile apps for iOS and Android?
                                </button>
                            </h6>
                            <div class="accordion-collapse collapse" data-bs-parent="#accordionExample" id="collapseTwo">
                                <div class="accordion-body">
                                    <p>We follow a hybrid development approach, using cross-platform frameworks such as Flutter or React Native to build mobile apps for both iOS and Android. This ensures faster development, cost-effectiveness, and optimal user experience on both platforms.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ 3: SEO Services -->
                        <div class="accordion-item">
                            <h6 class="accordion-header">
                                <button aria-controls="collapseThree" aria-expanded="false" class="accordion-button collapsed" data-bs-target="#collapseThree" data-bs-toggle="collapse" type="button">
                                    How can SEO help my business grow?
                                </button>
                            </h6>
                            <div class="accordion-collapse collapse" data-bs-parent="#accordionExample" id="collapseThree">
                                <div class="accordion-body">
                                    <p>SEO (Search Engine Optimization) improves your website's visibility on search engines like Google. By optimizing your website's content, structure, and backlinks, we help you rank higher for relevant keywords, driving more organic traffic and ultimately increasing conversions.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ 4: Digital Marketing Services -->
                        <div class="accordion-item">
                            <h6 class="accordion-header">
                                <button aria-controls="collapseFour" aria-expanded="false" class="accordion-button collapsed" data-bs-target="#collapseFour" data-bs-toggle="collapse" type="button">
                                    What digital marketing services do you offer?
                                </button>
                            </h6>
                            <div class="accordion-collapse collapse" data-bs-parent="#accordionExample" id="collapseFour">
                                <div class="accordion-body">
                                    <p>We offer a range of digital marketing services including SEO, social media marketing, email marketing, pay-per-click (PPC) advertising, and content marketing. Our goal is to help you reach your target audience and convert them into loyal customers.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5">
                    <div class="position-relative" data-aos="flip-left">
                        <div class="position-absolute">
                            <img alt="FAQ_Flower" src="assets/images/icons/FAQ_Flower.svg">
                        </div>
                        <figure class="d-flex justify-content-center align-items-center">
                            <img alt="FAQ_Img" class="w-100" src="assets/images/FAQ/FAQ_Img.webp">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======== End of 7.1. FAQ section ======== -->
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