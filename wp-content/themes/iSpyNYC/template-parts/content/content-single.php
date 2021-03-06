<article id="post-<?php the_ID(); ?>" class="article single-post">
    <div class="images">
        <?php get_template_part( 'media' ); ?>
    </div>
    <div class="meta">
        <div class="subject-block"><span class="subject">Subject:</span> <?php echo the_category(' , '); ?></div>
        <div class="author-block"><span class="author">Author:</span> <?php the_author(); ?></div>
        <div class="clear"></div>
        <div class="title-block"><?php the_title(); ?></div>
        <div class="location-block"><span class="location">Location:</span>
            <?php echo get_post_meta($post->ID, 'location_field', true); ?>
        </div>
        <div class="date-block"><span class="date">Date:</span> <?php the_time( 'F d, Y' ); ?></div>
    </div>
    <div class="clear"></div>
    <div class="paragraph ext"><?php the_content(); ?></div>
    <div class="comment_form">
        <span class="show-a-comment">Add a comments</span>
        <div class="form">
            <?php
            comments_template();  //'/inject/comments.php'
            ?>
        </div>
    </div>
</article>