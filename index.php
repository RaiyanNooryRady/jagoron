<?php
/**
 * Main Template File
 * @package Jagoron
 */
?>
<?php get_header(); ?>

<div id="primary">
    <main id="main" class="site-main mt-5" role="main">
        <?php
        if(have_posts()){
            ?>
            <div class="container">
                <?php
                while (have_posts()) {
                    the_post();
                    ?><h2><?php the_title();?></h2><?php
                    the_excerpt();
                    the_content();
                }
                 ?>
            </div>
            <?php
        }
         ?>
    </main>

</div>
<?php get_footer(); 