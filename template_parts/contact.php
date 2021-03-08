Start Contact Section -->
<section class="contact-section" id="contact" style="background-image: url(<?php echo get_theme_mod('contact_image') ?>);">
    <div class="container">
        <p>Contact Me</p>
        <h4 class="section-heading">Let's start a project together!</h4>
        <div class="row">
            <!-- Some Contact Information  -->
            <div class="col-md-4">
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <p>Email</p>
                    <a href="mailto:shohagmiah7474@gmail.com">shohagmiah7474@gmail.com</a>
                </div> <!-- Email -->
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <p>Phone</p>
                    <a href="">+8801754052073</a>
                </div> <!-- Phone -->
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <p>Location</p>
                    <p style="font-weight: normal;">Nikunja,Dhaka,Bangladesh</p>
                </div> <!-- address -->
            </div>
            <!-- Contact form for  contact with me -->
            <div class="col-md-8">
                <!-- Widget for contact form -->
                <?php dynamic_sidebar('widget1') ?>
            </div> <!-- End contact form -->
        </div>
    </div> <!-- Container -->
</section>
<!-- ///////// End Contact section /////////