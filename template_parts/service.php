<section class="service-section" id="service" style="background-image: url(<?php echo get_theme_mod('service_image') ?>);">
    <div class="container">
        <p>Fatest Awesome services</p>
        <h4 class="section-heading">What i do?</h4>
        <div class="row">
            <?php 
                $args = array(
                    'post_type'      => 'service',
                    'posts_per_page' => -1,
                    'order'          => 'ASC'
                );
                $service_item = new WP_Query($args);
                if($service_item->have_posts()): while($service_item->have_posts()): $service_item->the_post()
             ?>
                <div class="col-md-4">
                    <div class="service-box">
                        <div class="service-icon">
                            <i class="<?php echo get_post_meta(get_the_ID(),'service_icon',true) ?>"></i>
                        </div>
                        <h3 class="service-title"><?php the_title() ?></h3>
                        <p class="service-des"><?php the_content(); ?></p>
                    </div>
                </div>
            <?php endwhile;else:
                echo "<h3 class='empty'>No Service Available</h3>";
             endif; ?>
        </div>
    </div>
</section>