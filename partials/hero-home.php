<?php
/**
 * Hero Home
 * 
 * @package btp-wordpress
 */

$background_type = get_field('hero_background_type');
$background_image = get_field('hero_background_image');
$background_video = get_field('hero_background_video');
$video_poster = get_field('hero_video_poster');

// Prepare background style/markup
$background_style = '';
$video_markup = '';

if ($background_type === 'image' && !empty($background_image)) {
    $background_style = "background-image: url('{$background_image['url']}');";
} elseif ($background_type === 'video' && !empty($background_video)) {
    $video_markup = '<video class="hero-background-video" autoplay muted loop playsinline' . 
        (!empty($video_poster) ? ' poster="' . $video_poster['url'] . '"' : '') . '>' .
        '<source src="' . $background_video['url'] . '" type="' . $background_video['mime_type'] . '">' .
    '</video>';
}
?>

<section class="hero-home"<?php echo $background_style ? ' style="' . esc_attr($background_style) . '"' : ''; ?>>
    <?php if ($video_markup) echo $video_markup; ?>
    
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-10 col-xxl-9">
                <h1><?php h1_title(); ?></h1>
                <?php if (get_field('hero_subheadline')): ?>
                    <em><?php the_field('hero_subheadline'); ?></em>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
                