<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
    <!-- Page Scrollbar -->
    <div id="progressbar"></div>
    <div id="scrollPath"></div>
    <div id="percent"></div>
    <!-- Page Scrollbar -->

    <!-- Header section -->
    <header id="home">
        <div class="container">
            <div class="main-nav-wrap">
                <!-- Logo -->
                <a class="logo" href="<?php echo esc_url(home_url('/')) ?>">
                    <h4><?php echo get_theme_mod('logo_text'); ?></h4>
                </a>
                <!-- Main Navbar -->
                <div class="menu-bar">
                    <!-- Desktop Nav -->
                    <?php 
                        wp_nav_menu(array(
                            'theme_location'   => 'main_menu',
                            'container_class'  =>  'menu-bar',
                            'items_wrap'      => '<ul>%3$s</ul>'
                         ));
                     ?>
                     <!-- Mobile Navbar -->
                    <div class="mobile-menu">
                        <span onclick="openNav()" class="mobile-menu-toggle"><i class="fas fa-bars"></i></span>
                        <div id="mymobile-nav">
                            <a class="closeNav close"  href="javascript:void()"><i class="fas fa-times"></i></a>
                            <div class="overlay">
                                <!-- Mobile nav -->
                                <?php 
                                    wp_nav_menu(array(
                                        'theme_location'  => 'mobile_menu',
                                        'container-class' => 'mymobile-nav',
                                        'items_wrap'      => ' <div class="overlay">%3$s</div>'
                                    ));
                                 ?>
                            </div>
                        </div>
                    </div> <!-- End Mobile navbar -->
                </div> <!-- End Navbar -->
                </div>
            </div> <!--  End Main-nav-wrap -->
        </div> <!--  End container -->
    </header>
    <!-- Header section -->