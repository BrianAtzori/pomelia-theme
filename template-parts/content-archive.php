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
                <?php the_date(); ?> |
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