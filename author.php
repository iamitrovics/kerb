<?php
/**
 * The template for displaying the author pages
 *
 * Learn more: https://codex.wordpress.org/Author_Templates
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

    <header id="blog-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-caption">
                    <h1><?php the_author(); ?></h1>
                    </div>
                    <!-- /.header-caption -->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </header>
    
    <div id="blog-listing">
        <div class="container">
            <div class="row blf">
                <div class="col-md-12">
                    <div class="blog-listing-content">

                    <?php
                        
                        while(have_posts()): the_post(); ?>
                                                
                            <div class="blog-box">
                                <div class="blog-photo">
                                    <a href="<?php echo get_permalink(); ?>">
                                        <?php 
                                        $values = get_field( 'featured_image_blog' );
                                        if ( $values ) { ?>

                                            <?php
                                            $imageID = get_field('featured_image_blog');
                                            $image = wp_get_attachment_image_src( $imageID, 'blog-image' );
                                            $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                            ?> 

                                            <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 

                                        <?php 
                                        } else { ?>
                                            
                                        <?php } ?>
                                    </a>
                                </div>
                                <!-- /.blog-photo-->
                                <div class="blog-content">
                                    <!-- <span class="category">
                                        <?php
                                        global $post;
                                        $categories = get_the_category($post->ID);
                                        $cat_link = get_category_link($categories[0]->cat_ID);
                                        echo '<a href="'.$cat_link.'">'.$categories[0]->cat_name.'</a>' 
                                        ?>                                          
                                    </span> -->
                                    <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
                                    <?php the_field('excerpt_text'); ?>
                                    <a href="<?php echo get_permalink(); ?>" class="read-more">Read More</a>
                                    <!-- <div class="author">
                                        <div class="author-info">
                                            <span class="author-name"><?php the_author(); ?></span>
                                            <span class="date"><?php echo get_the_date( 'F j, Y' ); ?></span>
                                        </div>
                                    </div>
                                        /.author -->
                                </div>
                                <!-- /.blog-content -->

                            </div>
                          
                        <?php endwhile; ?>

                        <div class="custom-pager">
                            <div class="pager-nav">
                                <?php if( function_exists('wp_pagenavi') ) wp_pagenavi(); // WP-PageNavi function ?>
                            </div>
                            <!-- /.pager-nav -->
                        </div>
                        <!-- /.custom-pager -->

                    </div>
                    <!-- /.col-md-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.blog-items -->
    </div>
    <!-- /#blogs -->  

<?php
get_footer();
