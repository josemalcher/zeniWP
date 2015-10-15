<?php if (have_posts()): while (have_posts()): the_post(); ?>

        <?php get_template_part('partials/content', 'default'); ?>


    <?php endwhile; ?>
<?php else: ?>
    <?php get_template_part('partials/content', 'none'); ?>
<?php endif; ?>
<!-- page-navigation -->
<div class="page-navigation clearfix">
    <div class="nav-next">
        <?php previous_posts_link('&#8592; Post Recentes'); ?>
    </div>
    <div class="nav-previous">
        <?php next_posts_link('Post Antigos &#8594;'); ?>
    </div>
    <!--ENDS page-navigation -->