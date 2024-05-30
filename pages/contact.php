<!-- Contact Page -->

<?php
include '../account/config/config.php';
include '../partials/header.php';
include '../partials/navigation.php';
?>

<main class="aboutmain">

    <div class="top d-flex align-items-center" style="background-image: url('assets/Images/contact1.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center">
            <h2>Contact Us</h2>
        </div>
        <div class="bottom-bar d-flex align-items-center justify-content-center">
            <h3>Contact us now to learn more about our activities, events, and how to get involved in Obanshire Cub Scouts.</h3>
        </div>
    </div>

    <!-- ======= Contact Us Section ======= -->
    <section id="contact-us" class="contact-us">
        <div class="container contact">
            <div class="card no-hover">
                <div class="card-body">
                    <div>
                            <iframe style="border:0; width: 100%; height: 270px;"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4413.896237715746!2d-5.479263780193476!3d56.41695709290405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48896774a335c2b7%3A0x2b4b8cd7be0371fe!2s1st%20Argyll%20(Lorn)%20Scout%20Group!5e0!3m2!1sen!2sus!4v1715961198380!5m2!1sen!2sus" allowfullscreen frameborder="0"  loading="lazy" ></iframe>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-4">
                            <div class="info">
                                <div class="address">
                                    <i class="bi bi-geo-alt"></i>
                                    <h4>Location:</h4>
                                    <p>157a Monteith Row G40 1AZ</p>
                                </div>

                                <div class="email">
                                    <i class="bi bi-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>oban@gmail.com</p>
                                </div>

                                <div class="phone">
                                    <i class="bi bi-phone"></i>
                                    <h4>Call:</h4>
                                    <p>07939127723</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8 mt-5 mt-lg-0">
                            <form class="email-form">
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" placeholder="Your Name">
                                    <div class="validate"></div>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" placeholder="Email">
                                    <div class="validate"></div>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" placeholder="Subject">
                                    <div class="validate"></div>
                                </div>
                                <div class="form-group mt-3">
                                    <textarea class="form-control" rows="5" placeholder="Message"></textarea>
                                    <div class="validate"></div>
                                </div>
                                <div class="text-center"><button type="submit" class="btn-join-us">Send Message</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Contact Us Section -->



<?php
include '../partials/footer.php';
?>
