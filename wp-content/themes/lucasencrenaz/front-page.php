<?php
get_header();
include_once('php/menu.php');
?>

<div id="primary" class="site-content">
  <div id="content" role="main" class="homePage">
    <?php while ( have_posts() ) : the_post(); ?>
      <?php the_content() ?>
    <?php endwhile; ?>
  </div>
</div>

<?php get_footer(); ?>