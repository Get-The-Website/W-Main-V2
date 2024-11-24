<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>ContactUs - Optimistx</title>

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