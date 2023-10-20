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
            Il blog di Pomelia
        </h1>
        <p>
            Natura, turismo, sostenibilità e dintorni: tutti i nostri articoli
        </p>
    </div>
</section>

<section class="front-page-post">
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            get_template_part('template-parts/content', 'archive'); //file path, type -> 
    
        }
    }
    ?>
</section>

<?php
get_footer();
?>