<?php get_header(); ?>
<main id="content">
  <div class="feature">
    <div class="two-thirds">
      <h2>Mystical Tarot</h2>
      <p>This is some body text. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
      ullamco laboris nisi ut aliquip ex ea commodo consequat.
      </p>
      <a href="about.php" class="button">Read more</a>
    </div>
    <div class="one-thirds">
      <img src="https://image.shutterstock.com/image-photo/happy-cheerful-young-woman-wearing-260nw-613759379.jpg" alt="profile-pic">
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