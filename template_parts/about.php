 Start About section -->
<section class="about_us mtb-60 js--section-about" id="about">
    <div class="container">
        <div class="row">
            <?php 
                $args = array(
                    'post_type'      => 'about',
                    'posts_per_page' => -1,
                    'order'          => 'ASC'
                );
                $about_info = new WP_Query($args);
                if($about_info->have_posts()): while($about_info->have_posts()): $about_info->the_post()
             ?>
             <!-- Self Image -->
            <div class="col-md-5">          
                <div class="self-img">
                    <img src="<?php echo get_post_meta(get_the_ID(),'about_img',true) ?>" class="img-fluid" alt="">
                </div>
            </div>
            <!-- ///////// End Self image ///////// -->
            <!-- Start About Details here -->
            <div class="col-md-7">
                <div class="about-content">
                    <!-- About heading -->
                    <h4 class="section-heading"><?php echo get_post_meta(get_the_ID(),'about_heading',true) ?></</h4>
                    <!-- About subheading -->
                    <h4 class="about-title"><?php echo get_post_meta(get_the_ID(),'about_subheading',true) ?></h4>
                    <!-- About Me Details -->
                    <p class="about-details"><?php the_content() ?> </p>
                    <!-- BioData Links -->
                    <ul>
                        <li><i class="fas fa-user"></i><strong>Name:</strong> <?php echo get_post_meta(get_the_ID(),'name',true) ?></li>
                        <li><i class="fas fa-gift"></i><strong>Birthday:</strong>  <?php echo get_post_meta(get_the_ID(),'birthday',true) ?> </li>
                        <li><i class="fas fa-calculator"></i><strong>Age:</strong>  <?php echo get_post_meta(get_the_ID(),'age',true) ?> years</li>
                        <li><i class="fas fa-envelope"></i><strong>Email:</strong> <a href="mailto:shohagmiah7474@gmail.com"><?php echo get_post_meta(get_the_ID(),'email',true) ?></a></li>
                        <li><i class="fas fa-phone-alt"></i><strong>Phone:</strong>  <?php echo get_post_meta(get_the_ID(),'phone',true) ?></li>
                        <li><i class="fas fa-calendar-plus"></i><strong>Interest:</strong> <?php echo get_post_meta(get_the_ID(),'interest',true) ?></li>
                        <li><i class="fas fa-graduation-cap"></i><strong>Degree:</strong>  <?php echo get_post_meta(get_the_ID(),'degree',true) ?></li>
                    </ul>
                    <!-- About section button -->
                    <div class="about-content-btn">
                        <a href="" class="art-btn">Download cv <i class="fas fa-download"></i></a>
                        <a href="#contact" class="art-link">Send Message</a>
                    </div> <!-- Button End -->
                </div>
            </div>
            <!-- ///////// End About Details ///////// -->
            <?php endwhile;
             endif; ?>
        </div> <!-- End Row -->
    </div> <!-- End Container -->
</section>
<!-- ///////// End About section /////////