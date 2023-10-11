<?php
if (has_post_thumbnail()) {
    $post_thumbnail_id = get_post_thumbnail_id($post);
    $featured_image = wp_get_attachment_image_src($post_thumbnail_id, 'full');
}
?>

<section class="hero"
    style="background: url('<?php echo $featured_image[0]; ?>') no-repeat center center fixed; background-size:cover;">
    <div class="hero-content">
        <h1>
            <?php the_title(); ?>
        </h1>
    </div>

</section>

<div class="front-page-post">
    <?php
    the_content();
    ?>
</div>