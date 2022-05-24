<?php
/**
 * form content partial template
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>

<div class="quote-form-area">
    <!-- <h2>Get a Quote</h2> -->
    
    <div class="quote-form">
        <div class="quote-form-in">
            <?php the_field('form_code_hero', 'options'); ?>
        </div>
        <!-- /.quote-form-in -->
    </div>
    <!-- /.quote-form -->

</div>
<!-- /.quote-form-area -->