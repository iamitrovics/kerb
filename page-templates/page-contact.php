<?php 
/**
 * Template Name: Contact Us
 *
**/
get_header(); ?>

<header id="masheader" style="background-image: url(<?php the_field('background_image_contact') ?>)">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-info">
                            <?php the_field('contact_text_contact') ?>
                        </div> <!-- /.contact-info -->
                    </div>
                    <!-- /.col-md-6 -->
                    <div class="col-md-6">
                        <div class="quote-form-area">
                            <div class="quote-form">
                                <div class="quote-form-in">

                                    <?php the_field('form_code_contact'); ?>

                                </div>
                                <!-- /.quote-form-in -->
                            </div>
                            <!-- /.quote-form -->
                        </div>
                        <!-- /.quote-form-area -->
                    </div>
                    <!-- /.col-md-5 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.col-lg-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</header>

<?php get_template_part( 'part-contact-sec' ); ?>

<?php get_footer(); ?>