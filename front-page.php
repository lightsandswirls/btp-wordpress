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

                            <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3 text-center">

                                <h2 class="text-balance"><?php the_field('callout_headline'); ?></h2>

                            </div>           

                        </div>

                    </div>

                </section>

                <section class="main-content bg-gray-transparent">

                    <div class="container">

                        <div class="row">

                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                            <div class="col-12 col-lg-6 pe-md-5 mt-3 order-last order-lg-first">
                                <?php the_content(); ?>
                            </div>
                            
                            <div class="col-12 col-lg-6 ps-lg-0 mb-3 mb-lg-0 order-first order-lg-last">
                                <?php the_post_thumbnail('btp-featured-img'); ?>
                            </div>      
                            
                            <?php endwhile; endif; ?>                            

                        </div>

                    </div>

                </section>

<?php get_footer(); ?>