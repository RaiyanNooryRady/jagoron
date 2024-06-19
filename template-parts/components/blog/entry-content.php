<?php
/**
 * Template content
 * insid wordpress the loop
 * @package  jagoron
 */
?>
<div class="entry-content">
    <?php
    if (is_single()) {
        the_content(
            sprintf(
                wp_kses(
                    __('continue reading %s <span class="meta-nav">&rarr;</span>', 'jagoron'),
                    [
                        'span' => [
                            'class' => []
                        ]
                    ]
                        ),
                        the_title('<span class="screen-reader-text">','</span>',false)
            )
        );
    } 
    else{
        jagoron_the_excerpt(200);?><br><?php
        echo jagoron_excerpt_more();

    }
    ?>

</div>