<?php get_header(); ?>

<main class="main-content">
  <div class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article class="post">
        <h2><?php the_title(); ?></h2>
        <div class="post-content">
          <?php the_content(); ?>
        </div>
      </article>
    <?php endwhile; endif; ?>
  </div>
</main>

<section class="recommended-posts">
  <h2>Polecane posty</h2>
  <div class="recommended-grid">
    <?php
    $args = array(
      'posts_per_page' => 3,
      'orderby' => 'rand'  
    );
    $featured = new WP_Query($args);
    while ($featured->have_posts()) : $featured->the_post(); ?>
      <div class="recommended-item">
        <a href="<?php the_permalink(); ?>">
          <?php if (has_post_thumbnail()) {
            the_post_thumbnail('thumbnail');
          } ?>
          <h3><?php the_title(); ?></h3>
        </a>
      </div>
    <?php endwhile;
    wp_reset_postdata(); ?>
  </div>
</section>



<?php get_footer(); ?>
