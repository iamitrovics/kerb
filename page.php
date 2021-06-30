<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<div id="regular-page" class="default-page-content" class="section-area">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <?php the_field('flexible_content_regular') ?>
            </div>
            <!-- /.col-md-8 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div> 
<!-- /.regular-content -->

<?php get_template_part( 'part-contact-sec' ); ?>


<?php
get_footer(); ?>
