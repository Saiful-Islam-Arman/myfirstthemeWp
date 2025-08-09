<?php 
get_header();
?>

    <section id="body_area">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <?php 
                        if(have_posts()) :
                            while(have_posts()) : the_post();
                    ?>
                    <div class="blog_area">
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>"><div class="post_thumb"><?php the_post_thumbnail('custom-thumb'); ?></div></a>
                        <?php endif; ?>
                        <div class="post_details">
                            <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                    <?php 
                        endwhile;
                        else :
                            _e('No post found');
                        endif; ?>
                        <div id="page_nav">
                            <?php if('saiful_pagenav') {saiful_pagenav();} else {?>
                                <?php next_posts_link(); ?>
                                <?php previous_posts_link( ); ?>
                                <?php }?>
                        </div>
                </div>
                <div class="col-md-3">
                    <h2>This is side bar</h2>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>