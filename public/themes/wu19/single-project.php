<?php get_header(); ?>

<div class="row mt-5 mb-5">
    <div class="col">

      <?php if (have_posts()): ?>

          <?php while (have_posts()): the_post(); ?>
            <div class="row">
              <div class="col thumbnail">
                <?php if (has_post_thumbnail()) {
                  the_post_thumbnail('large');
                } ?>
              </div>
            </div><!-- /row -->

            <div class="row">
              <div class="col">
                <h1><?php the_title(); ?></h1>
                <?php if (get_field('project_customer')): ?>
                    <h2 class="h5"><?php the_field('project_customer'); ?></h2>
                <?php endif; ?>

                <?php the_content(); ?>

                <?php $tools = get_the_terms($post, 'tool'); ?>
                <?php if($tools): ?>
                    <p class="mb-0">This project was built using </p>
                    <ul>
                        <?php foreach ($tools as $tool) : ?>
                        <li><a href="<?php echo get_term_link($tool) ?>"><?php echo $tool->name ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                <?php if (get_field('project_website')): ?>
                    <a href="<?php the_field('project_website'); ?>">View the amazing result.</a>
                <?php endif; ?>
              </div>

            </div><!-- /row -->


          <?php endwhile; ?>

      <?php endif; ?>


    </div><!-- /col -->
</div><!-- /row -->

<?php get_footer(); ?>
