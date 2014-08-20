<?php get_header(); ?>

<div class="content">

    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

    <article class="single-article epsilon">

        <header class="single-article-meta landmark">

            <h2 class="single-article-title mega push-half--bottom">
                <?php the_title(); ?>
            </h2>

            <p class="brand-color caps">
                <?php the_author(); ?> &bull; <?php the_time( 'F j, Y' ); ?>
            </p>

        </header>

        <?php the_content(); ?>

    </article>

    <?php endwhile; ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>