<?php /* Template Name: Contacts Template */?>

<?php
get_header()
    ?>

<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        get_template_part('template-parts/content', 'page');
    }
}
?>

<form id="contact-form" class="contact-form-container">

    <input type="hidden" name="contact_number">

    <label>Il tuo nome:</label>

    <input type="text" name="user_name">

    <label>La tua mail:</label>

    <input type="email" name="user_email">

    <label>Il tuo messaggio:</label>

    <textarea name="message"></textarea>

    <input type="submit" value="Inviami una mail" class="send-button">

</form>

    <?php
    get_footer();
    ?>