<div class="comments-section">
    <?php if (have_comments()): ?>
        <div class="comments-header">
            <h2 class="comments-title">
                <?php
                printf(
                    _nx(
                        'È presente un commento per "%2$s" 👇🏻',
                        'Ci sono %1$s commenti per "%2$s" 👇🏻',
                        get_comments_number(),
                        'comments title',
                        ''
                    ),
                    number_format_i18n(get_comments_number()),
                    '<span>' . get_the_title() . '</span>'
                );
                ?>
            </h2>
        </div>

        <ol class="comments-list">
            <?php
            wp_list_comments(
                array(
                    'style' => 'ol',
                    'short_ping' => true,
                    'avatar_size' => 74,
                )
            );
            ?>
        </ol>

        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')): ?>
            <nav class="navigation comment-navigation" role="navigation">
                <h1 class="screen-reader-text section-heading">
                    <?php _e('Navigazione Commenti', ''); ?>
                </h1>
                <div class="nav-previous">
                    <?php previous_comments_link(__('&larr; Commenti più vecchi', '')); ?>
                </div>
                <div class="nav-next">
                    <?php next_comments_link(__('Commenti recenti &rarr;', '')); ?>
                </div>
            </nav>
        <?php endif; ?>

        <?php if (!comments_open() && get_comments_number()): ?>
            <p class="no-comments">
                <?php _e('I commenti  per questo articolo sono chiusi!', ''); ?>
            </p>
        <?php endif; ?>

    <?php endif; ?>

    <?php comment_form(); ?>

</div>