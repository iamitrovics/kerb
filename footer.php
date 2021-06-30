<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

	<footer id="page-footer">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="footer-sitemap">
                    <div class="certifications">
                        <?php

                            // check if the repeater field has rows of data
                            if(have_rows('link_list_repeater', 'options')):

                                // loop through the rows of data
                                while(have_rows('link_list_repeater', 'options')) : the_row();

                                    $icon = get_sub_field('link_image_footer', 'options');
                                    $link  = get_sub_field('link_footer', 'options');

                                    ?>  

                                    <a href="<?php echo $link; ?>" target="_blank"><img src="<?php echo $icon; ?>" alt=""></a>

                                <?php endwhile;

                            else :
                                echo 'No data';
                            endif;
                            ?>
                    </div>
                </div>
                <!-- /.footer-sitemap -->
            </div>
            <!-- /.col -->
            <div class="col">
                <div class="footer-sitemap">
                    <span class="footer-title"><?php the_field('title_footer_repeater_soc', 'options'); ?></span>
                    <!-- /.footer-title -->
                    <div class="socials-cards">
                        <div class="footer-socials">
                            <ul>
                                <?php

                                    // check if the repeater field has rows of data
                                    if(have_rows('social_list_repeater', 'options')):

                                        // loop through the rows of data
                                        while(have_rows('social_list_repeater', 'options')) : the_row();

                                            $icon = get_sub_field('link_image_footer_soc', 'options');
                                            $link  = get_sub_field('link_footer_soc', 'options');

                                            ?>  

                                            <a href="<?php echo $link; ?>" target="_blank"><img src="<?php echo $icon; ?>" alt=""></a>

                                        <?php endwhile;

                                    else :
                                        echo 'No data';
                                    endif;
                                ?>
                            </ul>
                        </div>
                        <!-- /.footer-socials -->
                    </div>
                    <!-- /.socials-cards -->
                </div>
                <!-- /.footer-sitemap -->
            </div> 
            <!-- /.col -->
            <div class="col">
                <div class="footer-sitemap">
                    <span class="footer-title"><?php the_field('menu_title_footer_1', 'options') ?></span>
                    <!-- /.footer-title -->
                    <ul>
                        <?php
                            wp_nav_menu( array(
                                'menu'              => 'footer-links-1',
                                'theme_location'    => 'footer-links-1',
                                'depth'             => 2,
                                'container'         => false,
                                'container_class'   => 'collapse navbar-collapse',
                                'container_id'      => false,
                                'menu_class'        => 'nav navbar-nav',
                                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                'items_wrap' => '%3$s',
                                'walker'            => new wp_bootstrap_navwalkermobile())
                            );
                        ?>
                    </ul>
                </div>
                <!-- /.footer-sitemap -->
            </div>
            <!-- /.col -->
            <div class="col">
                <div class="footer-sitemap">
                    <span class="footer-title"><?php the_field('menu_title_footer_2', 'options') ?></span>
                    <!-- /.footer-title -->
                    <ul>
                        <?php
                            wp_nav_menu( array(
                                'menu'              => 'footer-links-2',
                                'theme_location'    => 'footer-links-2',
                                'depth'             => 2,
                                'container'         => false,
                                'container_class'   => 'collapse navbar-collapse',
                                'container_id'      => false,
                                'menu_class'        => 'nav navbar-nav',
                                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                'items_wrap' => '%3$s',
                                'walker'            => new wp_bootstrap_navwalkermobile())
                            );
                        ?>
                    </ul>
                </div>
                <!-- /.footer-sitemap -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php the_field('copyrights_text', 'options') ?>
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.copyright -->
</footer>
<!-- /#page-footer -->

</div>
<!-- /.page-wrapper -->
<div id="cookie-notice">
    <div id="cookie-notice-in">
        <div class="notice-text">
            <p><?php the_field('notice_text_cookies', 'options') ?></p>
        </div>
        <!-- /.notice-text -->
        <div class="notice-btns">
            <a href="#" id="accept-cookie">Ok</a>
        </div>
        <!-- /.notice-btns -->
        <a href="javascript:void(0);" id="close-notice"></a>
    </div>
    <!-- /#cookie-notice-in -->
</div>
<!-- /#cookie-notice -->

<div class="modal-overlay disclaimer-modal" data-my-element="tooltip-modal">
    <div class="modal" data-my-element="tooltip-modal">
        <a class="close-modal">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/close.svg" alt="">
        </a>
        <!-- close modal -->
        <div class="disclaimer-modal-wrap">
            <p>By listing or updating my cellular phone information, I authorize Kerb Inc. to call or send SMS text messages using an automatic telephone dialing system or prerecorded message to my cell phone number to provide account information and services related to my long distance move. Additionally, I authorize Kerb Inc. to follow up in order to assist me with payment reminders and provide me with opportunities to provide feedback regarding customer service. If I do not want to receive calls or SMS text messages, I can unsubscribe by sending an email to info@kerb.com with the subject line “STOP Transaction Calls” or by calling a customer service representative at (877) 707-5372. Receipt of cellular phone calls and text messages may be subject to service provider charges.</p>
        </div>
        <!-- /.disclaimer-modal-wrap -->
    </div>
    <!-- modal -->
</div>
<!-- overlay -->

<a id="go-to-top" href="javascript:;"><i class="fas fa-chevron-up"></i></a>


	<?php wp_footer(); ?>

	<?php if( get_field('footer_code_snippet', 'options') ): ?>
		<?php the_field('footer_code_snippet', 'options'); ?>
	<?php endif; ?>

</body>
</html>

