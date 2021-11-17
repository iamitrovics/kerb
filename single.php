<?php
/**
 * The template for displaying all single posts
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

    <div id="blog-page">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="blog-body">
                        <h1><?php the_title(); ?></h1>
                        <div class="blog-meta">
                            <span>Posted
                            
                            <?php
                            global $post;
                            $categories = get_the_category($post->ID);
                            $cat_link = get_category_link($categories[0]->cat_ID);
                            echo '<a href="'.$cat_link.'">'.$categories[0]->cat_name.'</a>' 
                            ?>                               
                            
                             / <?php echo get_the_date( 'F j, Y' ); ?>
                            </span>
                            <div class="author-desc">
                                <?php echo get_avatar( get_the_author_meta( 'ID' ), 60 ); ?>
                                <div class="author-content">
                                    <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a>
                                    <p><?php the_author_description(); ?></p>
                                </div>
                                <!-- /.author-content -->
                            </div>
                        </div>
                        <!-- /.blog-meta -->
                        <div class="blog-content">

                            <?php if( have_rows('content_layout_blog') ): ?>
                                <?php while( have_rows('content_layout_blog') ): the_row(); ?>
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

                                    <?php elseif( get_row_layout() == 'quote_cta' ): ?>

                                        <div class="quote-cta--single">
                                            <span class="title"><?php the_sub_field('cta_title'); ?></span>
                                            <a href="#bottom-form" class="btn-cta"><?php the_sub_field('button_label'); ?></a>
                                        </div>
                                        <!-- // single  -->   
                                        
                                    <?php elseif( get_row_layout() == 'featured_article' ): ?>    
                                        <?php
                                            $post_objects = get_sub_field('featured_article_list');

                                            if( $post_objects ): ?>
                                                <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                                                    <?php setup_postdata($post); ?>
                                                        
                                                    <div class="featured-article-box">
                                                        <div class="blog-box">
                                                            <div class="blog-photo">
                                                                <a href="<?php echo get_permalink(); ?>" target="_blank">
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
                                                                <h3><a href="<?php echo get_permalink(); ?>" target="_blank"><?php the_title(); ?></a></h3>
                                                                <a href="<?php echo get_permalink(); ?>" target="_blank" class="btn-cta">Read More</a>
                                                            </div>
                                                            <!-- /.blog-content -->

                                                        </div>
                                                    </div>
                                                    <!-- /.featured-article -->
                                                        
                                                <?php endforeach; ?>
                                            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                                        <?php endif; ?>
                                        <?php wp_reset_postdata(); ?>

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
                                                            <div class="faq-content">
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

                                    <?php elseif( get_row_layout() == 'services_module' ): ?>

                                        <div id="services-area">
                                            <div class="services-in">
                                                <div class="row">

                                                <?php
                                                    $post_objects = get_sub_field('services_list_blog_page');

                                                    if( $post_objects ): ?>
                                                        <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                                                            <?php setup_postdata($post); ?>

                                                        <div class="service-item">
                                                            <a href="<?php echo get_permalink(); ?>" target="_blank">
                                                            <img src="<?php the_field('service_icon_services_page'); ?>" alt="">
                                                            <span class="service-title"><?php the_title(); ?></span>
                                                            </a>
                                                        </div>
                                                        <!-- /.service-item -->

                                                        <?php endforeach; ?>
                                                    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                                                <?php endif; ?>     

                                                </div>
                                                <!-- /.row -->
                                            </div>
                                            <!-- /.services-in -->
                                        </div>
                                        <!-- /#services-area -->

                                    <?php elseif( get_row_layout() == 'table' ): ?>

                                        <table style="width:100%" class="single-table">
                                            <thead>
                                                <tr role="row">
                                                <?php
                                                    // check if the repeater field has rows of data
                                                    if(have_rows('table_head_cells')):
                                                        // loop through the rows of data
                                                        while(have_rows('table_head_cells')) : the_row();
                                                            $hlabel = get_sub_field('table_cell_label_thead');
                                                            ?>  
                                                            <th tabindex="0" rowspan="1" colspan="1"><?php echo $hlabel; ?></th>
                                                        <?php endwhile;
                                                    else :
                                                        echo 'No data';
                                                    endif;
                                                    ?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php while ( have_posts() ) : the_post(); ?>
                                                <?php 
                                                // check for rows (parent repeater)
                                                if( have_rows('table_body_row') ): ?>
                                                    <?php 
                                                    // loop through rows (parent repeater)
                                                    while( have_rows('table_body_row') ): the_row(); ?>
                                                            <?php 
                                                            // check for rows (sub repeater)
                                                            if( have_rows('table_body_cells') ): ?>
                                                                <tr>
                                                                    <?php 
                                                                    // loop through rows (sub repeater)
                                                                    while( have_rows('table_body_cells') ): the_row();
                                                                        ?>
                                                                        <td><?php the_sub_field('table_cell_label_tbody'); ?></td>
                                                                    <?php endwhile; ?>
                                                                </tr>
                                                            <?php endif; //if( get_sub_field('') ): ?>
                                                    <?php endwhile; // while( has_sub_field('') ): ?>
                                                <?php endif; // if( get_field('') ): ?>
                                                <?php endwhile; // end of the loop. ?>
                                                
                                            </tbody>
                                        </table>

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

    <div id="bottom-form">
        <div class="container">
            <?php get_template_part( 'part-form' ); ?>
        </div>
    </div>
    <!-- // bottom form  -->

    <section class="similar-posts first-child-box">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Recent posts</h2>
                    <div class="blog-listing-content">
                        <div class="row">

                        <?php
                            $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 3) ); ?>  
                            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

							<div class="col-lg-4 col-md-6">
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
                                        <h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
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
							</div>
							<!-- /.col-lg-4 col-md-6 --> 

                                <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>    
                        <?php wp_reset_query(); ?>

                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.posts-list -->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.similar-posts -->

    <section class="similar-posts last-child-box">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Related posts</h2>
                    <div class="blog-listing-content">
                        <div class="row">

                            <?php
                                $categories =   get_the_category();
                                // print_r($categories);
                                $rp_query   =  new WP_Query ([
                                    'posts_per_page'        =>  3,
                                    'post__not_in'          =>  [ $post->ID ],
                                    'cat'                   =>  !empty($categories) ? $categories[0]->term_id : null,

                                ]);

                                if ( $rp_query->have_posts() ) {
                                    while( $rp_query->have_posts() ) {
                                        $rp_query->the_post();
                                        ?>

										<div class="col-lg-4 col-md-6">
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
                                                    <h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
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
										</div>
										<!-- /.col-lg-4 col-md-6 --> 

                                        <?php
                                    }

                                    wp_reset_postdata();

                                }

                            ?>

                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.posts-list -->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.similar-posts -->

<?php
get_footer();?>
