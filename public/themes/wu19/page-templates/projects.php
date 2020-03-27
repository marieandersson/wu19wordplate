<?php /* Template name: Projects */ ?>

<?php get_header(); ?>

<div class="row mt-5">
    <div class="col">

      <?php if (have_posts()): ?>

          <?php while (have_posts()): the_post(); ?>

              <h1><?php the_title(); ?></h1>

              <?php the_content(); ?>

          <?php endwhile; ?>

      <?php endif; ?>

    </div><!-- /col -->
</div><!-- /row -->

<?php $projects = get_posts(['post_type' => 'project']); ?>

<?php if (count($projects)): ?>
    <div class="row mt-5 mb-5">
        <?php foreach ($projects as $post): setup_postdata($post); ?>
            <div class="col-2">
            <?php if (has_post_thumbnail()) {
                the_post_thumbnail('thumbnail');
            } ?>
            </div>
            <div class="col-10 mb-2">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <p><?php the_excerpt(); ?></p>
            </div>
        <?php endforeach; ?>
    </div><!-- /row -->
<?php endif; ?>

<?php get_footer(); ?>
