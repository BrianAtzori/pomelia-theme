<?php /* Template Name: Contacts Template */?>

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
            <?php the_title(); ?>
        </h1>
    </div>

</section>

<div class="contacts-page">

    <div class="front-page-post">
        <?php
        the_content();
        ?>
    </div>

    <form id="contact-form" class="contact-form-container">

        <input type="hidden" name="contact_number">

        <label>Il tuo nome:</label>

        <input type="text" name="user_name">

        <label>La tua mail:</label>

        <input type="email" name="user_email">

        <label>Il tuo messaggio:</label>

        <textarea name="message" class="contacts-text-area" rows="20"></textarea>

        <input type="submit" class="form-button" value="Contattaci" class="send-button">

    </form>

</div>

<?php
get_footer();
?>