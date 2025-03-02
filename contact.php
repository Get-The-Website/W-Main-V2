<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Get The Website - Contact</title>

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
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d229.8591538835608!2d89.55795710835874!3d22.811856668588412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1733295371603!5m2!1sen!2sbd" style="border:0; width:100%; height:432px;"></iframe>
    </section>
    <!-- ======== End of 3.1. Map section ========  -->
    <!-- ======== 1.14. ContactUs section ========  -->
    <section class="ContactUs">
        <div class="container px-md-5">
            <div data-aos="fade-up">
                <h1>Let’s Talk</h1>
                <p class="w-50">
                    Have a project in mind or need assistance with your digital journey? Share your ideas with us, and let's make them a reality.
                </p>
            </div>
            <form class="mt-lg-5 mt-4 d-flex flex-column gap-lg-5 gap-4" data-aos="fade-up" action="insert" method="post">
                <input type="hidden" name="page" value="contact" required/>
                <div class="d-flex gap-lg-5 gap-4 w-100 flex-sm-row flex-column">
                    <input name="ContactName" type="text" placeholder="Your Name" required>
                    <input name="ContactEmail" type="email" placeholder="Email Address" required>
                </div>
                <input name="ContactNumber" type="tel" placeholder="Phone Number" required>
                <textarea name="ContactComment" placeholder="Write your message here" rows="10" required></textarea>
                <button type="submit" name="contactSubmit">Send Message</button>
            </form>
            <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content text-center">
                        <img src="assets/images/icons/Confirmation_1.gif" alt="Confirmation Icon">
                        <div>
                            <h4>Thank You!</h4>
                            <h6>Your message has been received. Our team will get back to you shortly.</h6>
                        </div>
                        <button type="button" class="hover1 m-auto" data-bs-dismiss="modal">Close</button>
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