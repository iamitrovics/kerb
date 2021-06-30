<?php 
/**
 * Template Name: Thank You Template
 *
**/
get_header(); ?>

    <div id="error-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span class="not-found-title"><?php the_field('main_title_tnx'); ?></span>
                    <h3><?php the_field('subtitle_tnx'); ?></h3>
                    <?php the_field('content_block_tnx'); ?>
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#error-page -->

    <?php get_template_part( 'part-contact-sec' ); ?>    

<?php get_footer(); ?>