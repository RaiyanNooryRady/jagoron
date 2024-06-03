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
        if (have_posts()) {
            ?>
            <div class="container">
                <?php
                if (is_home() && !is_front_page()) {
                    ?>
                    <header class="mb-5">
                        <h1 class="page-title">
                            <?php single_post_title(); ?>
                        </h1>
                    </header>
                    <?php
                }
                ?>
                <div class="row">
                    <?php
                    $index = 0;
                    $no_of_columns = 3;
                    //start the loop
                    while (have_posts()) {
                        the_post();
                        if (0 === $index % $no_of_columns) {
                            ?>
                            <div class="col-12 col-md-6 col-lg-4">

                                <?php
                        }
                        ?>
                        <h3><?php the_title();?></h3>
                        <div><?php the_excerpt(); ?></div>
                        <?php
                        $index++;
                        if (0 !== $index && 0 === $index % $no_of_columns) {
                            ?>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <?php
        }
        ?>
    </main>

</div>
<?php get_footer();