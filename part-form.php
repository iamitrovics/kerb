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
        <div class="steps">
            <div class="row">
            <?php if( have_rows('process_steps_quote', 'options') ): ?>
                <?php while( have_rows('process_steps_quote', 'options') ): the_row(); ?>

                    <div class="col-lg-4 col-md-4">
                        <div class="step-card">
                            <div class="icon">
                                <span><?php the_sub_field('step_number'); ?></span>
                                <img src="<?php the_sub_field('icon'); ?>" alt="">
                            </div>
                            <!-- // icon  -->
                            <div class="card-text">
                                <p><?php the_sub_field('text'); ?></p>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>
            </div>
        </div>
        <!-- // steps  -->
    </div>
    <!-- /.quote-form -->

</div>
<!-- /.quote-form-area -->