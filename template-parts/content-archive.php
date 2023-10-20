<?php
if (has_post_thumbnail()) {
    $post_thumbnail_id = get_post_thumbnail_id($post);
    $featured_image = wp_get_attachment_image_src($post_thumbnail_id, 'full');
}
?>

<section class="blog-card">
    <div class="card-cover">
        <img class="card-image" src="<?php the_post_thumbnail_url('thumbnail'); ?>" />
    </div>
    <div class="card-body">
        <header class="post-header">
            <h1>
                <?php the_title(); ?>
            </h1>
            <div class="post-details">
                🗓️
                <?php echo get_the_date() ?>
                <?php the_tags('<p>🏷️ ', ', </p><p> 🏷️ ', '</p>') ?>
                💬
                <?php comments_number(); ?>
            </div>
        </header>
        <article>
            <p class="post-excerpt">
                <?php
                the_excerpt();
                ?>
            </p>
            <button class="post-link"> <a href="<?php the_permalink(); ?>"> Leggi di più</a> </button>
        </article>
        <div>
</section>