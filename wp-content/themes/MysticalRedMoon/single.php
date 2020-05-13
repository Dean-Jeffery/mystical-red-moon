<?php /* Template Name: Template for blog posts */ ?>
<?php get_header(); ?>


<div id="primary" class="site-content feature">
  <div id="content" role="main">

    <?php while ( have_posts() ) : the_post(); ?>
      <div class="post-title">
        <?php the_post_thumbnail(); ?>
        <h2 class="entry-title"><?php the_title(); ?></h2>
      </div>

      <div class="entry-content">
        <?php the_content(); ?>
      </div><!-- .entry-content -->

    <?php endwhile; // end of the loop. ?>

  </div><!-- #content -->
</div><!-- #primary -->


<?php get_footer(); ?>
