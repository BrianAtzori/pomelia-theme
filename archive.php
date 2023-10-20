<?php
get_header()
    ?>

<div style="height: 100vh;">
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            get_template_part('template-parts/content', 'archive'); //file path, type -> 
        }
    }
    ?>
</div>

<?php
get_footer();
?>