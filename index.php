<?php get_header(); ?>
<!-- MAIN -->
<div id="main">	
    <div class="wrapper clearfix">



        <!-- posts list -->
        <div id="posts-list">

            <h2 class="page-heading"><span>BLOG</span></h2>	
                <?php get_template_part('partials/loop', 'main');?>
            </div>

        </div>
        <!-- ENDS posts list -->

        <!-- sidebar -->
        <aside id="sidebar">

            <ul>
                <li class="block">
                    <h4>CATEGORIES</h4>
                    <ul>
                        <li class="cat-item"><a href="#" title="View all posts">Film and video</a></li>
                        <li class="cat-item"><a href="#" title="View all posts">Print</a></li>
                        <li class="cat-item"><a href="#" title="View all posts">Photo and lomo</a></li>
                        <li class="cat-item"><a href="#" title="View all posts">Habitant morbi</a></li>
                        <li class="cat-item"><a href="#" title="View all posts">Film and video</a></li>
                        <li class="cat-item"><a href="#" title="View all posts">Print</a></li>
                        <li class="cat-item"><a href="#" title="View all posts">Photo and lomo</a></li>
                        <li class="cat-item"><a href="#" title="View all posts">Habitant morbi</a></li>
                    </ul>
                </li>

                <li class="block">
                    <h4>ARCHIVES</h4>
                    <ul>
                        <li class="cat-item"><a href="#" title="View all posts">January</a></li>
                        <li class="cat-item"><a href="#" title="View all posts">February</a></li>
                        <li class="cat-item"><a href="#" title="View all posts">March</a></li>
                    </ul>
                </li>

            </ul>

            <em id="corner"></em>
        </aside>
        <!-- ENDS sidebar -->

    </div>
</div>
<!-- ENDS MAIN -->

<?php get_footer(); ?>
