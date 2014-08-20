<aside class="sidebar">

    <div class="sidebar-articles-container">

        <ul class="home-articles-list nav nav--stacked push-half--bottom">
            <?php
                // Get latest 4 posts without the latest one
                $args = array( 'posts_per_page' => 4, 'offset' => 1 );

                $latest_posts = new WP_Query( $args );

                if ( $latest_posts->have_posts() ) while ( $latest_posts->have_posts() ) : $latest_posts->the_post();
            ?>
            <li>
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?> <i class="icon icon-right-arrow-small"></i>
                </a>
            </li>
            <?php endwhile; wp_reset_postdata(); ?>
        </ul>

        <a href="<?php echo get_page_link( get_option( 'page_for_posts' ) ); ?>" class="home-articles-link">
            <strong>VIEW ALL</strong>
            <i class="icon icon-right-arrow-big"></i>
        </a>

    </div>

</aside>