<?php
/**
 * Hero Home
 * 
 * @package btp-wordpress
 */

$hero_image = get_field('hero_image');

?>

<section class="hero-home">

    <div class="container">

        <div class="row">

            <div class="col-12 col-md-9">

                <h1><?php h1_title(); ?></h1>
                <p><?php the_field('hero_subtitle'); ?></p>

            </div>

        </div>

    </div>

</section>