<?php get_header(); ?>
<!-- MAIN -->
<div id="main">	
    <div class="wrapper clearfix">



        <!-- posts list -->
        <div id="posts-list">

            <h2 class="page-heading">
                <span>Resultado da busca: ' <?php echo esc_html(get_query_var('s'))?> '</span>
            </h2>	
            <?php get_template_part('partials/loop', 'main'); ?>
        </div>

    </div>
    <!-- ENDS posts list -->
    
    <?php get_sidebar(); ?>

</div>
</div>
<!-- ENDS MAIN -->

<?php get_footer(); ?>
