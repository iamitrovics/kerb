<?php
/**
 * form content partial template
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>

<div id="contact-home" class="section-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <?php the_field('text_options_contact', 'options') ?>
            </div>
            <!-- /.col-md-8 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /#testimonials -->