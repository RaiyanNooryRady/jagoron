<?php
/**
 * Page Template File
 * @package Jagoron
 */
$the_post_id = get_the_ID();
$has_post_thumbnail = get_the_post_thumbnail($the_post_id);
?>
<?php get_header(); ?>
<div class="content">
    <?php if (have_posts()) {
        while (have_posts()) {
            the_post();
            ?>
            <div class="container">
                <h1 class="my-5"><?php the_title(); ?></h1>
                <?php
                if ($has_post_thumbnail) {
                    the_post_thumbnail($the_post_id);
                }
                the_content();
                ?>
            </div>
            <?php
        }
    } ?>
</div>
<?php get_footer();