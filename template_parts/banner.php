<!-- Php query for slider or banner content -->
<?php 
    $args = array(
        'post_type'       => 'slider',
        'posts_per_page'  => 1,
    );
    $slider = new WP_Query($args);
    
 ?>
 <?php if($slider->have_posts()): while($slider->have_posts() ): $slider->the_post(); ?>

<div class="banner" style="background-image:linear-gradient(
      90deg,
      rgba(45, 45, 58, 0.9) 15%,
      rgba(45, 45, 58, 0.7) 50%,
      rgba(43, 43, 53, 0.7) 100%
    ), url(<?php echo  get_theme_mod('header_image')  ?>)">
        <div class="container">
           <div class="banner-content-wrap">
            <div class="banner-content">
                <!-- Banner Title and Content -->
                <div class="banner-title">
                    <p><?php echo get_post_meta(57,'banner_title',true) ?></p>
                    <?php the_content() ?>
                </div> 
                <!-- Banner Typescript animate -->
                <div class="art-lg-text art-code mb-25">&lt;<i>code</i>&gt; I build 
                    <span class="animate"></span>
                    &lt;/<i>code</i>&gt;
                </div>
                <!-- Banner Button -->
                <div class="banner-buttons">
                    <a href="#service" class="art-btn"><span>Explore Now</span></a>
                    <a href="#contact" class="art-link"><span>Hire Me</span></a>
                </div>
            </div>
            <!-- Mouce scroll animation -->
            <a href="#service" class="mouce-icon">
                <span class="while"></span>
            </a>
           </div>
        </div>
    </div>
    <!-- ///////// End Banner section ///////// -->
    <?php endwhile; endif; ?>