<?php 
/**
 * Template Name: Review Page
 *
**/
get_header(); ?>

<header id="masheader" style="background-image: url(<?php the_field('background_image_hero_testimonials') ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="header-caption">
                    <span class="heading-title"><?php the_field('title_hero_testimonials') ?></span>
                    <h2 class="h-after"><?php the_field('title_small_hero_testimonials') ?></h2>
                    <?php the_field('hero_paragraph_testimonials') ?>
                </div>
                <!-- /.header-caption -->
                <?php get_template_part( 'part-form' ); ?>
                <!-- /.quote-form-area -->
            </div>
            <!-- /.col-lg-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</header>

<div id="testimonials-single" class="section-area">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <h2><?php the_field('testimonial_title_testimonials'); ?></h2>

                    <?php
                    $loop = new WP_Query( array( 'post_type' => 'reviews', 'posts_per_page' => -1) ); ?>  
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                            
                        <div class="testimonial-box">
                            <div class="star-area"><img src="<?php the_field('star_area_testimonials'); ?>" alt=""></div>
                            <!-- /.star-area -->
                            <?php the_field('content_testimonial_box_testimonials'); ?>
                            <span class="author"><?php the_title(); ?></span>
                        </div>
                        <!-- /.testimonial-box -->
                        
                    <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>      

            </div>
            <!-- /.col-md-8 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div> 
<!-- /.regular-content -->

<?php get_template_part( 'part-contact-sec' ); ?>

<?php get_footer(); ?>