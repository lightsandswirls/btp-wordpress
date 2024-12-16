<?php
/**
 * Front Page
 * 
 * @package btp-wordpress
 */

get_header();
?>

                <section class="main-content">

                    <div class="container">

                        <div class="row">

                            <div class="col-12 col-md-6 offset-md-3 text-center">

                                <h2 class="text-balance"><?php the_field('callout_headline'); ?></h2>

                            </div>           

                        </div>

                    </div>

                </section>

                <section class="main-content bg-gray-transparent">

                    <div class="container">

                        <div class="row">

                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                            <div class="col-12 col-md-6 pe-5 mt-3">
                                <?php the_content(); ?>
                            </div>
                            
                            <div class="col-12 col-md-6 ps-0">
                                <?php the_post_thumbnail('btp-featured-img'); ?>
                            </div>      
                            
                            <?php endwhile; endif; ?>                            

                        </div>

                    </div>

                </section>

<?php get_footer(); ?>