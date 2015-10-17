<article class="format-standard">
    <div class="entry-date">
        <div class="number"><?php the_time('j'); ?></div>
        <div class="year"><?php the_time('F, Y'); ?></div>
    </div>
    <div class="feature-image">
        <?php
        if (has_post_thumbnail()) {
            the_post_thumbnail('post-thumb');
        }
        ?>
    </div>
    <h2  class="post-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php if (is_single()) : ?>
        <div class="post-content">
            <?php the_content(); ?>
        </div>
    <?php else: ?>
        <div class="excerpt">
            <?php the_excerpt(); ?>
        </div>
        <a href="<?php the_permalink(); ?>" class="read-more">Leia Mais &#8594;</a>
    <?php endif; ?>

    <div class="meta">
        <div class="categories">Em <?php the_category(', '); ?> </div>
        <div class="comments"><a href="#">5 comments </a></div>
        <div class="user">
            Por <?php the_author_posts_link(); ?>
        </div>
    </div>

    <?php if (is_single()) : ?>

        <!-- comments list -->
        <div id="comments-wrap">
            <h3 class="heading">5 COMMENTS</h3>
            <ol class="commentlist">

                <li class="comment even thread-even depth-1" id="li-comment-1">

                    <div id="comment-1" class="comment-body clearfix">
                        <img alt='' src='http://0.gravatar.com/avatar/4f64c9f81bb0d4ee969aaf7b4a5a6f40?s=35&amp;d=&amp;r=G' class='avatar avatar-35 photo' height='35' width='35' />      
                        <div class="comment-author vcard">Jhon</div>
                        <div class="comment-meta commentmetadata">
                            <span class="comment-date">3 days ago  </span>
                            <span class="comment-reply-link-wrap"><a class='comment-reply-link' href='replytocom=23#respond' onclick='return addComment.moveForm("comment-1", "1", "respond", "432")'>Reply</a></span>

                        </div>
                        <div class="comment-inner">
                            <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                        </div>
                    </div>

                    <!-- child -->
                    <ul class='children'>
                        <li class="comment even alt depth-2" id="li-comment-2-1">
                            <div id="comment-2" class="comment-body clearfix">
                                <img alt='' src='http://0.gravatar.com/avatar/4f64c9f81bb0d4ee969aaf7b4a5a6f40?s=35&amp;d=&amp;r=G' class='avatar avatar-35 photo' height='35' width='35' />      
                                <div class="comment-author vcard">Jhon</div>
                                <div class="comment-meta commentmetadata">
                                    <span class="comment-date">1 hour ago  </span>
                                    <span class="comment-reply-link-wrap"><a class='comment-reply-link' href='replytocom=24#respond' onclick='return addComment.moveForm("comment-2", "2", "respond", "432")'>Reply</a></span>
                                </div>
                                <div class="comment-inner">
                                    <p>Pellentesque ornare sem lacinia quam venenatis vestibulum. Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis.</p>
                                </div>
                            </div>
                        </li>

                        <li class="comment odd alt depth-2" id="li-comment-2-2">
                            <div id="comment-3" class="comment-body clearfix">
                                <img alt='' src='http://0.gravatar.com/avatar/4f64c9f81bb0d4ee969aaf7b4a5a6f40?s=35&amp;d=&amp;r=G' class='avatar avatar-35 photo' height='35' width='35' />      
                                <div class="comment-author vcard">Jhon</div>
                                <div class="comment-meta commentmetadata">
                                    <span class="comment-date">1 hour ago  </span>
                                    <span class="comment-reply-link-wrap"><a class='comment-reply-link' href='replytocom=24#respond' onclick='return addComment.moveForm("comment-3", "2", "respond", "432")'>Reply</a></span>
                                </div>
                                <div class="comment-inner">
                                    <p>Pellentesque ornare sem lacinia quam venenatis vestibulum. Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis.</p>
                                </div>
                            </div>
                        </li>


                    </ul>
                    <!-- ENDS child -->
                </li>


                <li class="comment odd thread-even depth-1" id="li-comment-3">

                    <div id="comment-4" class="comment-body clearfix">
                        <img alt='' src='http://0.gravatar.com/avatar/4f64c9f81bb0d4ee969aaf7b4a5a6f40?s=35&amp;d=&amp;r=G' class='avatar avatar-35 photo' height='35' width='35' />      
                        <div class="comment-author vcard">Jhon</div>
                        <div class="comment-meta commentmetadata">
                            <span class="comment-date">3 days ago  </span>
                            <span class="comment-reply-link-wrap"><a class='comment-reply-link' href='replytocom=23#respond' onclick='return addComment.moveForm("comment-4", "1", "respond", "432")'>Reply</a></span>

                        </div>
                        <div class="comment-inner">
                            <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                        </div>
                    </div>
                </li>

                <li class="comment even thread-even depth-1" id="li-comment-4">

                    <div id="comment-5" class="comment-body clearfix">
                        <img alt='' src='http://0.gravatar.com/avatar/4f64c9f81bb0d4ee969aaf7b4a5a6f40?s=35&amp;d=&amp;r=G' class='avatar avatar-35 photo' height='35' width='35' />      
                        <div class="comment-author vcard">Jhon</div>
                        <div class="comment-meta commentmetadata">
                            <span class="comment-date">3 days ago  </span>
                            <span class="comment-reply-link-wrap"><a class='comment-reply-link' href='replytocom=23#respond' onclick='return addComment.moveForm("comment-5", "1", "respond", "432")'>Reply</a></span>

                        </div>
                        <div class="comment-inner">
                            <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                        </div>
                    </div>
                </li>


            </ol>
        </div>
        <!-- ENDS comments list -->


        <!-- Respond -->				
        <div id="respond">

            <div class="cancel-comment-reply"><a rel="nofollow" id="cancel-comment-reply-link" href="#respond" style="display:none;">Cancel reply</a></div>
            <form action="single.html" method="post" id="commentform">
                <h3 class="heading">LEAVE A REPLY</h3>
                <input type="text" name="author" id="author" value="" tabindex="1" />
                <label for="author">Name <small>*</small></label><br/>

                <input type="text" name="email" id="email" value="" tabindex="2" />
                <label for="email">Email <small>*</small> <span>(not published)</span></label><br/>

                <input type="text" name="url" id="url" value="" tabindex="3" />
                <label for="url">Website</label>

                <textarea name="comment" id="comment"  tabindex="4"></textarea>

                <p><input name="submit" type="submit" id="submit" tabindex="5" value="Post" /></p>

                <input type='hidden' name='comment_post_ID' value='' id='comment_post_ID' />
                <input type='hidden' name='comment_parent' id='comment_parent' value='0' />	
            </form>
        </div>
        <div class="clearfix"></div>
        <!-- ENDS Respond -->
    <?php endif; ?>
</article>
