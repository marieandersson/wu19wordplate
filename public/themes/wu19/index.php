<?php get_header(); ?>

<div class="row mt-5">
    <div class="col">
      <?php if (have_posts()): ?>
          <!-- Start the loop -->
          <?php while (have_posts()): ?>
              <!-- iterate the post index and set up the next post in line -->
              <?php the_post(); ?>
              <div class="row mb-5">
                <div class="col-2">
                  <?php if (has_post_thumbnail()) {
                    the_post_thumbnail('thumbnail');
                  } ?>
                </div>
                <div class="col-10">
                  <!-- Output post specific content -->
                  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                  <?php the_excerpt(); ?>
              </div>
            </div>
          <?php endwhile; ?>

      <?php else: ?>
        <p>No posts.</p>
      <?php endif; ?>

    </div><!-- /col -->
</div><!-- /row -->

<?php get_footer(); ?>