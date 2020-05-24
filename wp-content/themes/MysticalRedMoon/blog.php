<?php /* Template Name: Blog */ ?>
<?php get_header(); ?>
<main id="content">
    <div class="feature about-feature all-blog">

        <!-- Define WP Query Parameters -->
        <?php $the_query = new WP_Query( 'posts_per_page=1000' ); ?>
        <!-- Start WP Query -->
        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
        <div class="full-width">
          <!-- Display the Post Title with Hyperlink -->
          <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>

          <!-- Display the Post Excerpt -->
          <?php the_excerpt(__('(more…)')); ?>

          <!-- post date -->
          <span class="date"><?php echo get_the_date(); ?></span>

        </div>
      <!-- Repeat the process and reset once it hits the limit -->
      <?php 
      endwhile;
      wp_reset_postdata();
      ?>


    </div>
</main>
<?php get_footer(); ?>