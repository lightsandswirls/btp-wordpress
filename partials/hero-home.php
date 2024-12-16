<?php
/**
 * Hero Home
 * 
 * @package btp-wordpress
 */

$hero_background = get_field('hero_background');
?>

                <section class="hero-home" style="background-image: url('<?php echo $hero_background['url']; ?>');">

                    <div class="container">

                        <div class="row">

                            <div class="col-12 col-md-9">

                                <h1><?php h1_title(); ?></h1>
                                <p><em><?php the_field('hero_subheadline'); ?></em></p>

                            </div>

                        </div>

                    </div>

                </section>
                