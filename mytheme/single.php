<?php get_header(); ?>

<main class="main-content">
  <div class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article class="post">
        <h2><?php the_title(); ?></h2>
        <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail('large'); ?>
        <?php endif; ?>
        <div class="post-content">
          <?php the_content(); ?>
        </div>
        <p><a href="<?php echo get_post_type_archive_link('post'); ?>" class="back-button">← Wróć do przepisów</a></p>
      </article>
    <?php endwhile; endif; ?>
  </div>
</main>

<?php get_footer(); ?>
