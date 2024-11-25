<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get The Website - Detail</title>

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
                <h1>Detail</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua.</p>
            </div>
        </div>
    </section>
    <!-- ======== End of 4.1. SubPage_Hero section ========  -->
    <!-- ======== 1.10. Agency section ========  -->
    <section class="Agency ServicesDetail_Agency">
        <div class="container">
            <div class="row position-relative m-0">
                <div>
                    <img class="position-absolute" src="assets/images/icons/Product_Flower.svg" alt="Agency_Flower">
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="d-flex justify-content-end w-100 h-100 mt-md-0 mt-5">
                        <figure class="h-100 d-flex w-100" data-aos="fade-up">
                            <img class="w-100 object-fit-cover" src="assets/images/ServicesDetail/Services_Detail.webp"
                                 alt="ServicesDetail">
                        </figure>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="d-flex justify-content-between flex-column" data-aos="fade-up">
                        <div>
                            <h4 class="pe-lg-5">We Are Professional SEO Agency</h4>
                            <p class="py-lg-4 py-3">
                                Lorem ipsum dolor sit amet consectetur. In nulla nunc arcu
                                velit consectetur massa mauris molestie hac. Hac arcu amet
                                nullam pellentesque. Urna eu suspendisse felis sodales sit
                                non.
                            </p>
                        </div>
                        <div class="d-flex flex-column gap-lg-4 gap-4">
                            <div class="d-flex gap-lg-4 gap-3 align-items-center">
                                <h6 class="d-flex justify-content-center align-items-center">
                                    01
                                </h6>
                                <p>Urna eu suspendisse felis sodales.</p>
                            </div>
                            <div class="d-flex gap-lg-4 gap-3 align-items-center">
                                <h6 class="d-flex justify-content-center align-items-center">
                                    02
                                </h6>
                                <p>Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                            <div class="d-flex gap-lg-4 gap-3 align-items-center">
                                <h6 class="d-flex justify-content-center align-items-center">
                                    03
                                </h6>
                                <p>In nulla nunc arcu velit consectetur.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======== End of 1.10. Agency section ========  -->
    <!-- ======== 1.4. Goal section ========  -->
    <section class="Goal ServicesDetail_Goal">
        <div class="container">
            <div class="row flex-md-row flex-column justify-content-between">
                <div class="col-lg-6">
                    <div class="d-flex flex-column gap-sm-4 gap-3 justify-content-between mt-lg-3" data-aos="fade-up">
                        <h4>Description</h4>
                        <p>Lorem, ipsum dolor natoque parturient nostra pharetra himenaeos et litora.
                            Himenaeos
                            nascetur vestibulum finibus porttitor ut leo. Finibus commodo class letius feugiat pede
                            montes sociosqu vulputate ornare mattis posuere. Sit nunc purus netus urna letius.
                        </p>
                        <p>
                            Lorem, ipsum dolor natoque parturient nostra pharetra himenaeos et litora.
                            Himenaeos
                            nascetur vestibulum finibus porttitor ut leo. Finibus commodo class letius feugiat pede
                            montes sociosqu vulputate ornare mattis posuere. Sit nunc purus netus urna letius.</p>
                        <div class="d-flex gap-lg-3 gap-3 flex-wrap py-lg-3 py-2">
                            <h6>The Briefing</h6>
                            <h6>Analysing</h6>
                            <h6>Design and Adaptive</h6>
                            <h6>Development</h6>
                            <h6>Search Engine Optimization</h6>
                        </div>
                        <div class="d-flex gap-lg-5 gap-4 align-items-center py-lg-3 py-2">
                            <div>
                                <a class="hover3" href="#">
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                    Get Started
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="position-relative d-flex justify-content-end h-100">
                        <figure class="w-100 h-100" data-aos="flip-left">
                            <img class="w-100 h-100 m-0" src="assets/images/ServicesDetail/Desctiption_Img.webp"
                                 alt="Desctiption_Img">
                        </figure>
                        <figure class="position-absolute">
                            <img class="z-0 position-relative" src="assets/images/icons/goal_doddle.svg" alt="doddle">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======== End of 1.4. Goal section ========  -->
    <!-- ======== 6.1. Quote section ========  -->
    <section class="Quote">
        <div class="container">
            <div class="row gy-md-0 gy-4 flex-md-row flex-column-reverse">
                <div class="col-lg-7 col-md-7">
                    <div class="d-flex flex-column" data-aos="fade-up">
                        <h4>Free Quote </h4>
                        <form class="d-flex flex-column gap-md-4 gap-3">
                            <input name="QuoteName" type="text" placeholder="Your Name" required="">
                            <div class="d-flex gap-md-4 gap-3 justify-content-between flex-lg-row flex-column">
                                <input name="QuoteEmail" class="w-50" type="email" placeholder="Email" required="">
                                <input name="QuoteNumber" class="w-50" type="tel" placeholder="Phone" required="">
                            </div>
                            <textarea name="QuoteComment" placeholder="Project Detail" rows="4" required=""></textarea>
                            <button type="submit">Submit</button>
                        </form>
                        <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                             aria-hidden="true">
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
                </div>
                <div class="col-lg-5 col-md-5">
                    <div class="d-flex flex-column gap-md-4 gap-3 h-100 justify-content-center align-items-center"
                         data-aos="fade-up">
                        <p>Id blandit facilisis dolor natoque parturient nostra pharetra himenaeos et litora.
                            Himenaeos
                            nascetur
                            vestibulum finibus porttitor ut leo. Finibus commodo class letius feugiat pede montes
                            sociosqu vulputate
                            ornare mattis posuere. Sit nunc purus netus urna letius.</p>
                        <p>Id blandit facilisis dolor natoque parturient nostra pharetra himenaeos et litora.
                            Himenaeos
                            nascetur
                            vestibulum finibus porttitor ut leo. Finibus commodo class letius feugiat pede montes
                            sociosqu vulputate
                            ornare mattis posuere. Sit nunc purus netus urna letius.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======== End of 6.1. Quote section ========  -->
    <!-- ======== 1.13. Partners section ========  -->
    <section class="Partners py-0">
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
                <div class="Partners_Slider2 d-flex gap-lg-4" dir="rtl" data-aos="zoom-in-up">
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
    <!-- ======== 1.11. Testimonial section ========  -->
    <section class="Testimonial pb-0">
        <div class="container">
            <div class="d-flex flex-column justify-content-center align-items-center w-75 m-auto text-center"
                 data-aos="fade-up">
                <h3>What Our Client says</h3>
                <p class="w-75">
                    Lorem ipsum dolor sit amet consectetur. In nulla nunc arcu velit
                    consectetur massa mauris molestie hac.
                </p>
            </div>
        </div>
        <div class="Testimonial_Slider1 d-flex px-lg-4 gap-lg-4 mt-lg-5 mt-4 align-items-center justify-content-center">
            <div class="d-flex gap-lg-5 mx-lg-3 mx-2">
                <figure class="w-100">
                    <img src="assets/images/slider/Testimonial_Img1.webp" alt="">
                </figure>
                <div class="d-flex flex-column">
                    <figure class="d-flex gap-2">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </figure>
                    <p class="py-3">
                        Lorem ipsum dolor sit amet consectetur. Nunc risus pellentesque
                        vehicula enim aenean aliquam. Ac quam enim feugiat nam.
                        Adipiscing vel sed aliquam enim et pretium aliquam mattis nulla.
                        Nunc faucibus id lorem.
                    </p>
                    <div class="d-flex flex-column gap-1">
                        <h6>Sophia</h6>
                        <p>Graphic Designer</p>
                    </div>
                </div>
            </div>
            <div class="d-flex gap-lg-5 mx-lg-3 mx-2">
                <figure class="w-100">
                    <img src="assets/images/slider/Testimonial_Img2.webp" alt="">
                </figure>
                <div class="d-flex flex-column">
                    <figure class="d-flex gap-2">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </figure>
                    <p class="py-3">
                        Lorem ipsum dolor sit amet consectetur. Nunc risus pellentesque
                        vehicula enim aenean aliquam. Ac quam enim feugiat nam.
                        Adipiscing vel sed aliquam enim et pretium aliquam mattis nulla.
                        Nunc faucibus id lorem.
                    </p>
                    <div class="d-flex flex-column gap-1">
                        <h6>Jophep</h6>
                        <p>Data Analyst</p>
                    </div>
                </div>
            </div>
            <div class="d-flex gap-lg-5 mx-lg-3 mx-2">
                <figure class="w-100">
                    <img src="assets/images/slider/Testimonial_Img3.webp" alt="">
                </figure>
                <div class="d-flex flex-column">
                    <figure class="d-flex gap-2">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </figure>
                    <p class="py-3">
                        Lorem ipsum dolor sit amet consectetur. Nunc risus pellentesque
                        vehicula enim aenean aliquam. Ac quam enim feugiat nam.
                        Adipiscing vel sed aliquam enim et pretium aliquam mattis nulla.
                        Nunc faucibus id lorem.
                    </p>
                    <div class="d-flex flex-column gap-1">
                        <h6>Watson</h6>
                        <p>UI/UX Designer</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="Testimonial_Slider2 d-flex px-lg-4 gap-lg-4 mt-lg-4 mt-3 align-items-center justify-content-center"
             dir="rtl">
            <div class="d-flex gap-lg-5 mx-lg-3 mx-2" dir="ltr">
                <figure class="w-100">
                    <img src="assets/images/slider/Testimonial_Img4.webp" alt="">
                </figure>
                <div class="d-flex flex-column">
                    <figure class="d-flex gap-2">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </figure>
                    <p class="py-3">
                        Lorem ipsum dolor sit amet consectetur. Nunc risus pellentesque
                        vehicula enim aenean aliquam. Ac quam enim feugiat nam.
                        Adipiscing vel sed aliquam enim et pretium aliquam mattis nulla.
                        Nunc faucibus id lorem.
                    </p>
                    <div class="d-flex flex-column gap-1">
                        <h6>Emma</h6>
                        <p>DevOps Engineer</p>
                    </div>
                </div>
            </div>
            <div class="d-flex gap-lg-5 mx-lg-3 mx-2" dir="ltr">
                <figure class="w-100">
                    <img src="assets/images/slider/Testimonial_Img5.webp" alt="">
                </figure>
                <div class="d-flex flex-column">
                    <figure class="d-flex gap-2">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </figure>
                    <p class="py-3">
                        Lorem ipsum dolor sit amet consectetur. Nunc risus pellentesque
                        vehicula enim aenean aliquam. Ac quam enim feugiat nam.
                        Adipiscing vel sed aliquam enim et pretium aliquam mattis nulla.
                        Nunc faucibus id lorem.
                    </p>
                    <div class="d-flex flex-column gap-1">
                        <h6>Olivia</h6>
                        <p>Product Manager</p>
                    </div>
                </div>
            </div>
            <div class="d-flex gap-lg-5 mx-lg-3 mx-2" dir="ltr">
                <figure class="w-100">
                    <img src="assets/images/slider/Testimonial_Img6.webp" alt="">
                </figure>
                <div class="d-flex flex-column">
                    <figure class="d-flex gap-2">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </figure>
                    <p class="py-3">
                        Lorem ipsum dolor sit amet consectetur. Nunc risus pellentesque
                        vehicula enim aenean aliquam. Ac quam enim feugiat nam.
                        Adipiscing vel sed aliquam enim et pretium aliquam mattis nulla.
                        Nunc faucibus id lorem.
                    </p>
                    <div class="d-flex flex-column gap-1">
                        <h6>Liam</h6>
                        <p>Cybersecurity Specialist</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======== End of 1.11. Testimonial section ========  -->
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