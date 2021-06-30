<?php
/**
 * Template Name: Services Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

	<header id="masheader" style="background-image: url(<?php the_field('background_image_hero_services_page') ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-caption">
                        <h1 class="heading-title"><?php the_field('title_hero_services_page') ?></h1>
                        <h2 class="h-after"><?php the_field('title_small_hero_services_page') ?></h2>
                        <?php the_field('hero_paragraph_services_page') ?>
                    </div>
                    <!-- /.header-caption -->
                    <?php get_template_part( 'part-form' ); ?>
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </header>

	<div id="services-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="services-in">
                        <div class="row">

				            <?php
				            $loop = new WP_Query( array( 'post_type' => 'services', 'posts_per_page' => 15) ); ?>  
				            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                                <div class="service-item">
                                    <a href="<?php echo get_permalink(); ?>">
                                    <img src="<?php the_field('service_icon_services_page'); ?>" alt="">
                                    <span class="service-title"><?php the_title(); ?></span>
                                    </a>
                                </div>
                                <!-- /.service-item -->

				            <?php endwhile; ?>
				            <?php wp_reset_postdata(); ?>      

			            </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.services-in -->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#services-area -->

    <?php get_template_part( 'part-contact-sec' ); ?>
		
<?php get_footer(); ?>

