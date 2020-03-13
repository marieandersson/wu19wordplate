<?php /* Template name: About */ ?>

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

<?php $students = get_posts(['post_type' => 'student']); ?>

<?php if (count($students)): ?>
    <div class="row mt-5 mb-5">
        <div class="col">
            <h2 class="h5">Students</h2>
            <ul>
                <?php foreach ($students as $post): setup_postdata($post); ?>
                    <li class="mb-2">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

                        <?php $skills = get_the_terms( $post, 'skill'); ?>

                        <p class="mb-0">Awesome at: </p>
                        <ul>
                          <?php foreach ($skills as $skill) : ?>
                            <li><a href="<?php echo get_term_link($skill) ?>"><?php echo $skill->name ?></a></li>
                          <?php endforeach; ?>
                        </ul>

                    </li>
                <?php endforeach; ?>
            </ul>
        </div><!-- /col -->
    </div><!-- /row -->
<?php endif; ?>

<?php get_footer(); ?>
