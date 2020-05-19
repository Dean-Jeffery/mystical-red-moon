<?php /* Template Name: About */ ?>
<?php get_header(); ?>
<main id="content">

    <div class="feature about-feature">
        <div class="full-width">
            <!-- pull content for about, probably not the most reliable way to do it but it works -->
        <?php while ( have_posts() ) : the_post(); ?> <!-- Pull about content -->
        <div class="title">
            <?php the_post_thumbnail(); ?>
            <h2 class="entry-title h2-no-padding"><?php the_title(); ?></h2>
        </div>
        <div class="content">
            <?php the_content(); ?>
        </div>
        <?php endwhile; // end of the loop. ?>
        </div>
    </div>

</main>
<?php get_footer(); ?>