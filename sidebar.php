
<!-- sidebar -->
<aside id="sidebar">

    <ul>
        <li class="block">
            <?php get_search_form(); ?>
        </li>
        
        <li class="block">
            <h4>CATEGORIAS</h4>
            <ul>
                <?php wp_list_categories(
                        array(
                          'title_li'   => '',
                          'exclude'    => '1',
                        )
                        ); ?>
            </ul>
        </li>

        <li class="block">
            <h4>ARQUIVOS</h4>
            <ul>
                <?php wp_get_archives();?>
            </ul>
        </li>

    </ul>

    <em id="corner"></em>
</aside>
<!-- ENDS sidebar -->