<?php
/**
 * The template for displaying all single posts
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<header id="masheader" style="background-image: url(<?php the_field('background_image_hero_cities') ?>)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="header-caption">
                    <span class="heading-title"><?php the_field('title_hero_cities') ?></span>
                    <h2 class="h-after"><?php the_field('title_small_hero_cities') ?></h2>
                    <?php the_field('hero_paragraph_cities') ?>
                    <a href="tel: <?php the_field('cities_phone') ?>" class="phone phone-cities"> <i class="fal fa-phone-alt"></i> <span class="phone-text"> <?php the_field('cities_phone') ?></span></a>
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

<div id="blog-page" class="cities-ctp">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="blog-body">
                        
                    <div class="blog-content">

                        <?php if( have_rows('flexible_content_cities') ): ?>
                            <?php while( have_rows('flexible_content_cities') ): the_row(); ?>
                                <?php if( get_row_layout() == 'intro_text' ): ?>

                                    <div class="intro-text">
                                        <?php the_sub_field('intro_content'); ?>
                                    </div>

                                <?php elseif( get_row_layout() == 'full_width_content' ): ?>

                                    <div class="full-content">
                                        <?php the_sub_field('content_block'); ?>
                                    </div>

                                <?php elseif( get_row_layout() == 'full_width_image' ): ?>

                                    <div class="featured-photo">
                                        <?php
                                        $imageID = get_sub_field('featured_image');
                                        $image = wp_get_attachment_image_src( $imageID, 'side-image' );
                                        $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                        ?> 

                                        <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                                        <div class="caption">
                                            <?php the_sub_field('image_caption'); ?>
                                        </div>
                                    </div>

                                <?php elseif( get_row_layout() == 'half_width_image' ): ?>

                                    <div class="half-width-image">

                                        <div class="featured-photo half-content">
                                            <?php
                                            $imageID = get_sub_field('featured_image_1_half');
                                            $image = wp_get_attachment_image_src( $imageID, 'side-image' );
                                            $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                            ?> 

                                            <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                                            <div class="caption">
                                                <?php the_sub_field('image_caption'); ?>
                                            </div>
                                        </div>

                                        <div class="featured-photo half-content">
                                            <?php
                                            $imageID = get_sub_field('featured_image_2_half');
                                            $image = wp_get_attachment_image_src( $imageID, 'side-image' );
                                            $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                            ?> 

                                            <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                                            <div class="caption">
                                                <?php the_sub_field('image_caption'); ?>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- /.half-width-image -->

                                <?php elseif( get_row_layout() == 'quote' ): ?>

                                    <div class="quote-holder">
                                        <?php the_sub_field('quotation_content'); ?>
                                        <small><?php the_sub_field('source'); ?></small>
                                    </div>

                                <?php elseif( get_row_layout() == 'video' ): ?>

                                    <div class="video-holder">
                                        <?php the_sub_field('embedded_code'); ?>
                                    </div>

                                <?php elseif( get_row_layout() == 'accordion' ): ?>

                                    <div class="content__accordion">

                                        <h2><?php the_sub_field('accordion_title'); ?></h2>

                                        <?php

			                                // check if the repeater field has rows of data
			                                if(have_rows('accordion_list')):

				                                // loop through the rows of data
				                                while(have_rows('accordion_list')) : the_row();

                                                    $title = get_sub_field('heading');
					                                $content  = get_sub_field('content');

					                                ?>  

					                                <div class="faq-wrap">
                                                        <h3><?php echo $title; ?></h3>
                                                        <div>
                                                            <?php echo $content; ?>
                                                        </div>
                                                    </div>

				                                <?php endwhile;

			                                else :
				                                echo 'No data';
			                                endif;
			                                ?>

                                    </div>
                                    <!-- /#faq__accordion -->

                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>

                    </div>
                    <!-- /.blog-content -->
                    </div>
                <!-- /.blog-body -->
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /#blog-page -->

<div id="cities-contact" class="section-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2>Didn’t find what you need? Give us a call</h2>
                <p><?php the_field('cities_address') ?></p>
                <a href="tel: <?php the_field('cities_phone') ?>" class="phone phone-cities"> <i class="fal fa-phone-alt"></i> <span class="phone-text"> <?php the_field('cities_phone') ?></span></a>
            </div>
            <!-- /.col-md-8 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- cities-contact -->

<?php
get_footer(); ?>
