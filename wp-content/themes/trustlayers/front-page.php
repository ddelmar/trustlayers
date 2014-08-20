<?php get_header(); ?>

<!-- #intro -->
<div id="" class="home-intro-container">

<!-- .home-intro -->
    <div class="">

        <div class="home-intro-content">

            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

            <h2 class="home-intro-title mega">
                <?php the_title(); ?>
            </h2>

            <section class="home-intro-body cf">

                <div class="home-intro-text delta">
                    <p class="flush--bottom">
                        <?php echo get_the_content(); ?>
                    </p>
                </div>

                <a href="#about" class="home-intro-link js-scroll">
                    <i class="icon icon-down-arrow-big"></i>
                </a>

            </section>

            <?php endwhile; ?>

        </div>

    </div>

</div>

<div id="intro"></div> 
<div id="overlaid"></div> 
<div id="underlaid"></div> 

<div id="about" class="home-middle-container">

    <div class="home-middle delta">

        <div class="home-middle-content">
            <?php echo get_field( 'intro_text' ); ?>
        </div>

    </div>

</div>

<div id="blog" class="home-blog">

    <?php
        // Get latest post
        $latest_post = new WP_Query( array( 'posts_per_page' => 1 ) );

        if ( $latest_post->have_posts() ) while ( $latest_post->have_posts() ) : $latest_post->the_post();
    ?>

    <article class="home-blog-main delta">

        <h3 class="home-blog-title landmark mega">
            <?php the_title(); ?>
        </h3>

        <p class="flush--bottom">
            <?php echo get_the_excerpt(); ?>

            <a href="<?php the_permalink(); ?>">
                <strong>READ MORE</strong>
                <i class="icon icon-right-arrow-big"></i>
            </a>
        </p>

    </article>

    <?php endwhile; ?>

    <aside class="home-blog-articles epsilon">

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

    </aside>

</div>

<div id="team" class="home-team-container">

    <div class="home-team delta cf">

        <h4 class="home-team-title landmark mega">
            Our Team
        </h4>

        <?php if ( have_rows( 'members' ) ) while ( have_rows( 'members' ) ) : the_row(); ?>

        <figure class="home-team-member">

            <?php $thumbnail = get_sub_field( 'image' ); ?>

            <img
                src="<?php echo $thumbnail['sizes']['member-thumb']; ?>"
                width="<?php echo $thumbnail['sizes']['member-thumb-width']; ?>"
                height="<?php echo $thumbnail['sizes']['member-thumb-height']; ?>"
                alt="<?php echo $thumbnail['title']; ?>"
                class="push-half--bottom"
            >

            <figcaption class="home-team-member-description">
                <h6 class="home-team-name gamma flush--bottom">
                    <?php the_sub_field( 'name' ); ?>
                </h6>
                <p class="flush--bottom">
                    <?php echo get_sub_field( 'description' ); ?>
                </p>
            </figcaption>

        </figure>

        <?php endwhile; ?>

    </div>

</div>

<div id="contact" class="home-contact-container">

    <div class="home-contact">

        <h4 class="home-contact-title landmark mega">
            Contact Us
        </h4>

        <?php echo do_shortcode( '[contact-form-7 id="13" title="Contact Form"]' ); ?>

    </div>

</div>

<?php get_footer(); ?>