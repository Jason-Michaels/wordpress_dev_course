<?php

	get_header();

    while (have_posts()) {
        the_post(); ?>
        <h1>Single page!!</h1>
        <?php the_title() ?>
        <?php the_content(); ?>
        <hr />
    <?php }

    get_footer();
?>