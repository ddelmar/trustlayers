<?php get_header(); ?>

<div class="blog-intro">

    <?php
        // Get latest post in current query
        $args = wp_parse_args( array( 'posts_per_page' => 1 ), $wp_query );

        $latest_post = new WP_Query( $args );

        if ( $latest_post->have_posts() ) while ( $latest_post->have_posts() ) : $latest_post->the_post();
    ?>

    <article class="blog-intro-article delta">

        <h2 class="blog-intro-article-title mega">
            <?php the_title(); ?>
        </h2>

        <p>
            <?php echo get_the_excerpt(); ?>

            <a href="<?php the_permalink(); ?>">
                <strong>READ MORE</strong>
                <i class="icon icon-right-arrow-big"></i>
            </a>
        </p>

    </article>

    <?php endwhile; ?>

</div>

<div class="articles-list epsilon cf">

    <?php
        // Get remaining posts
        $args = wp_parse_args( array( 'offset' => 1 ), $wp_query );

        $remaining_posts = new WP_Query( $args );

        if ( $remaining_posts->have_posts() ) while ( $remaining_posts->have_posts() ) : $remaining_posts->the_post();
    ?>

    <div class="articles-list-single">

        <header class="brand-color weight--light caps">
            <?php the_author(); ?> &bull; <?php the_time( 'F j, Y' ); ?>
        </header>

        <a href="<?php the_permalink(); ?>" class="articles-list-single-title">
            <?php the_title(); ?> <i class="icon icon-right-arrow-small"></i>
        </a>

    </div>

    <?php endwhile; wp_reset_postdata(); ?>

</div>

<?php get_footer(); ?>