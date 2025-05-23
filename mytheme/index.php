<?php get_header(); ?>

<div class="content-with-sidebar container">
  <main class="main-content">
    <?php if (have_posts()) : ?>
      <div class="post-list">
        <?php while (have_posts()) : the_post(); ?>
          <article class="post">
            <a href="<?php the_permalink(); ?>">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('medium'); ?>
              <?php endif; ?>
              <div class="post-content">
                <h2><?php the_title(); ?></h2>
                <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
              </div>
            </a>
          </article>
        <?php endwhile; ?>
      </div>
    <?php else : ?>
      <p>Brak przepisów do wyświetlenia.</p>
    <?php endif; ?>
  </main>

  <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
