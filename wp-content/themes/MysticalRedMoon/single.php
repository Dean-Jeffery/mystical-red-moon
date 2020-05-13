<?php /* Template Name: Template for blog posts */ ?>
<?php get_header(); ?>


<div id="primary" class="site-content feature narrow-container">
  <div id="content" role="main">

    <?php while ( have_posts() ) : the_post(); ?> <!-- Pull blog content -->
      
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


<div class="red-container"> <!-- Recent blogs -->
    <div class="wrapper">
    <h2>Recent Blogs</h2>
    <div class="thirds">
      <div class="one-thirds">
        <h3>Recent blog #1</h3>
        <p>This is some body text. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <a href="about.php" class="button">Read more</a>
      </div>
      <div class="one-thirds">
        <h3>Recent blog #2</h3>
        <p>This is some body text. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <a href="about.php" class="button">Read more</a>
      </div>
      <div class="one-thirds">
        <h3>Recent blog #3</h3>
        <p>This is some body text. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <a href="about.php" class="button">Read more</a>
      </div>
    </div>
  </div>
  </div>


<?php get_footer(); ?>
