<?php 
/**
 * Template Name: Homepage
**/
get_header(); ?>

   <header id="masheader">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="header-caption">
                    <span class="heading-title"><?php the_field('title_hero_home') ?></span>
                    <h2 class="h-after"><?php the_field('title_small_hero_home') ?></h2>
                    <?php the_field('hero_paragraph_home') ?>
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

			                // check if the repeater field has rows of data
			                if(have_rows('service_box_home')):

				                // loop through the rows of data
				                while(have_rows('service_box_home')) : the_row();

					                $image = get_sub_field('image_services_box_home');
					                $title = get_sub_field('title_services_box_home');
					                $link  = get_sub_field('link_services_box_home');

					                ?>  

					                <div class="col-md-6">
                                        <div class="service-item home-services">
                                            <a href="<?php echo $link; ?>">
                                            <img src="<?php echo $image; ?>" alt="">
                                            <span class="service-title"><?php echo $title; ?></span>
                                            </a>
                                        </div>
                                        <!-- /.service-item -->
                                    </div>
                                    <!-- /.col-md-6 -->

				                <?php endwhile;

			                else :
				                echo 'No data';
			                endif;
			                ?>

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

<div id="testimonials" style="background-image: url(<?php the_field('background_image_testimonials_home') ?>)" class="section-area">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <h2><?php the_field('title_testimonials_home') ?></h2>
                <div class="row">

                    <?php

			            // check if the repeater field has rows of data
			            if(have_rows('testimonials_list_home')):

				            // loop through the rows of data
				            while(have_rows('testimonials_list_home')) : the_row();

					            $author = get_sub_field('author_testimonial_box_home');
					            $star = get_sub_field('star_testimonial_box_home');
					            $text  = get_sub_field('text_testimonial_box_home');

					            ?>  

                                <div class="col-md-4">
                                    <div class="testimonial-single">
                                        <div class="star-area"><img src="<?php echo $star; ?>" alt=""></div>
                                        <!-- /.star-area -->
                                        <p><?php echo $text; ?></p>
                                        <span class="author"><?php echo $author; ?></span>
                                    </div>
                                    <!-- /.testimonial-single -->
                                </div>
                                <!-- / .col-md-4 -->

				            <?php endwhile;

			            else :
				            echo 'No data';
			            endif;
			        ?>

                </div>
            <!-- /.row -->
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /#testimonials -->

<?php get_template_part( 'part-contact-sec' ); ?>

<?php get_footer(); ?>


