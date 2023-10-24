<?php
if (has_post_thumbnail()) {
    $post_thumbnail_id = get_post_thumbnail_id($post);
    $featured_image = wp_get_attachment_image_src($post_thumbnail_id, 'full');
}
$categories = get_the_category();
?>

<section class="hero"
    style="background: url('<?php echo $featured_image[0]; ?>') no-repeat center center fixed; background-size:cover;">
    <div class="hero-content">
        <h1>
            <?php the_title(); ?>
        </h1>
        <p>
            🗓️
            <?php echo get_the_date() ?>
        <p>
            <?php foreach ($categories as $category) {
                echo $category->name;
                echo ' - ';
            } ?>
        </p>
        <?php the_tags('<p>🏷️ ', ' </p><p> 🏷️ ', '</p>') ?>
        💬
        <?php comments_number(); ?>
        </p>
    </div>
</section>

<div class="page-post">
    <?php
    the_content();
    ?>
    <?php
    if (comments_open() || get_comments_number()) {
        comments_template();
    }
    ?>
</div>