<?php 
/**
 * Template Name: About Us
 *
**/
get_header(); ?>

<header id="masheader" style="background-image: url(<?php the_field('background_image_hero_about') ?>)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="header-caption">
                    <h1 class="heading-title"><?php the_field('title_hero_about') ?></h1>
                    <h2 class="h-after"><?php the_field('title_small_hero_about') ?></h2>
                    <?php the_field('hero_paragraph_about') ?>
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

<div id="regular-page" class="section-area">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <?php the_field('flexible_content_about') ?>
            </div>
            <!-- /.col-md-8 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div> 
<!-- /.regular-content -->

<div id="locations-list" class="section-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Locations</h2>
                <?php
                    $loop = new WP_Query( array( 'post_type' => 'cities', 'posts_per_page' => -1) ); ?>  
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                        <div class="locations-item">
                            <a href="<?php echo get_permalink(); ?>">
                            <span class="locations-title"><?php the_title(); ?></span>
                            </a>
                        </div>
                        <!-- /.service-item -->

                    <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>      
            </div>
            <!-- /.col-md-8 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /#testimonials -->

<?php get_footer(); ?>