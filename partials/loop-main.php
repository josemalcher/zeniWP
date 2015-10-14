<?php if (have_posts()): while (have_posts()): the_post(); ?>

        <?php get_template_part('partials/content', 'default'); ?>


    <?php endwhile; ?>
<?php else: ?>
    <?php get_template_part('partials/content', 'none') ?>
<?php endif; ?>
<!-- page-navigation -->
<div class="page-navigation clearfix">
    <div class="nav-next">
        <a  href="#">&#8592; Older Entries </a>
    </div>
    <div class="nav-previous">
        <a href="#">Newer Entries &#8594;</a> 
    </div>
    <!--ENDS page-navigation -->