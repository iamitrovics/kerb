<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div id="error-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <span class="not-found-title"><?php the_field('text_first_404', 'options'); ?></span>
                <h1><?php the_field('title_404', 'options'); ?></h1>
                <p><?php the_field('text_second_404', 'options'); ?></p>
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /#error-page -->

<?php
get_footer(); ?>
