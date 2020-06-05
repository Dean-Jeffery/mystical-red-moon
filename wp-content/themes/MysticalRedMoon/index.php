<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
<main id="content">
  <div class="feature">
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
  <div class="red-container">
    <div class="wrapper">
      <h2>Recent Blogs</h2>
      <div class="thirds">
        <!-- Define WP Query Parameters -->
        <?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>
        <!-- Start WP Query -->
        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
        <div class="one-thirds">
          <!-- Display the Post Title with Hyperlink -->
          <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
          <!-- Display the Post Excerpt -->
          <?php the_excerpt(__('(more…)')); ?>
          <a href="<?php the_permalink() ?>" class="button">Read more</a>
        </div>
      <!-- Repeat the process and reset once it hits the limit -->
      <?php 
      endwhile;
      wp_reset_postdata();
      ?>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>