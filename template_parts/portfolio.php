<section class="portfolio-section" id="portfolio">
    <div class="container">
        <?php 
            $args = array(
                'post_type'      => 'portfolio',
                'posts_per_page' => -1,
                'order'          => 'ASC',
                'tax_query'      => array(
                    'taxonomy'   => 'portfolio_cat',
                )
            );
            $porfolio_item = new WP_Query($args);
         ?>
        <p>My Recent works</p>
        <h4 class="section-heading">Portfolio Works</h4>
        <!-- Portfolio filter button -->
        <ul class="portfolio-filter-button">
            <li class="active"><button type="button" data-filter="all">Show All</button></li>
            <?php
               $args = array(
                           'taxonomy' => 'portfolio_cat',
                           'orderby' => 'name',
                           'order'   => 'ASC'
                       );

               $cats = get_categories($args);

               foreach($cats as $cat) {
            ?>
            <li><button type="button" data-filter=".<?php echo $cat->slug; ?>"><?php echo $cat->name; ?></button></li>
                
            <?php
               }
            ?>    
        </ul><!--  End filter button -->

        <!-- Portfolio item -->
        <div class="row portfolio-item-container">
            <?php if($porfolio_item->have_posts()): while($porfolio_item->have_posts()): $porfolio_item->the_post(); 
                $category = get_the_terms($post->ID,'portfolio_cat');
                foreach ($category as $key => $cates) {
                                        }
                ?>
            <div class="col-md-3 mix <?php echo $cates->slug; ?> portfolio-item">
                <a href="">
                    <?php the_post_thumbnail() ?>
                </a>
            </div>
        <?php endwhile; endif; ?>
        </div> <!-- End portfolio item -->
    </div>
</section>
<!-- End Section -->