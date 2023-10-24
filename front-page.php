<?php
get_header()
    ?>

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
            <?php echo get_bloginfo('name') ?>
        </h1>
        <p>
            <?php echo get_bloginfo('description') ?>
        </p>
    </div>

    <button class="cta-button"><a class="cta-button-link"
            href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>">Scopri di
            più</a></button>

</section>

<section class="page-post">
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            the_content();
        }
    }
    ?>
</section>

<?php
get_footer();
?>