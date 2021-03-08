<!-- Project plan or process -->
<section class="plan-section mtb-60" id="plan">
    <div class="container">
        <p style="color: #ccc;">Process</p>
        <h4 class="section-heading">How do i work?</h4>
        <div class="row">
            <?php 
                $args = array(
                    'post_type'      => 'process',
                    'posts_per_page' => -1,
                    'order'          => 'ASC'
                );
                $process_item = new WP_Query($args);
                if($process_item->have_posts()): while($process_item->have_posts()): $process_item->the_post()
             ?>
            <div class="col-md-4">
                <div class="discuss plan-item">
                    <div class="plan-icon">
                        <i class="<?php echo get_post_meta(get_the_ID(),'process_icon',true) ?>"></i>
                    </div>
                    <h3 class="plan-item-title"><?php the_title() ?></h3>
                    <p><?php the_content() ?></p>
                </div>
            </div>
            <?php endwhile;
             endif; ?>

        </div>
    </div>
</section>
<!-- End section -->