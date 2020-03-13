<?php get_header(); ?>

<div class="row mt-5">
    <div class="col">

      <?php if (have_posts()): ?>

          <?php while (have_posts()): the_post(); ?>

              <?php the_content(); ?>

          <?php endwhile; ?>

      <?php endif; ?>

    </div><!-- /col -->
</div><!-- /row -->

<?php
  $args = [
    'numberposts' => 2,
    'order' => 'desc',
  ];

  $latestPosts = get_posts($args);

?>
<div class="row mt-5">

    <?php foreach($latestPosts as $post) : setup_postdata($post);  ?>

        <div class="col-6">
          <h2>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h2>
          <?php the_excerpt(); ?>
        </div>

    <?php endforeach; ?>


</div><!-- /row -->

<div class="row mt-2 mb-5">
  <div class="col">
    <?php $blogPageUrl = get_permalink( get_option( 'page_for_posts' ) ); ?>
    <a href="<?php echo $blogPageUrl ?>">All posts --></a>
  </div>
</div><!-- /row -->
<?php get_footer(); ?>
