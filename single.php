<?php get_header(); ?>
<!-- MAIN -->
<div id="main">	
    <div class="wrapper clearfix">




        <!-- posts list -->
        <div id="posts-list" class="single-post">

            <?php if (have_posts()) : the_post(); ?>
                <h2 class="page-heading"><span><?php the_title(); ?></span></h2>	
                        <?php get_template_part('partials/content', 'default'); ?>
                    <?php endif; ?>


        </div>
        <!-- ENDS posts list -->

        <?php get_sidebar(); ?>

    </div>
</div>
<!-- ENDS MAIN -->
<?php get_footer(); ?>