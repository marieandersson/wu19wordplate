<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

  <?php wp_head(); ?>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav mr-auto">
            <?php foreach (wp_get_nav_menu_items('main-menu') as $page): ?>
                <li class="nav-item <?php if (is_home() && $page->object_id == get_option('page_for_posts') || is_page($page->object_id)) { echo 'active'; } ?>">
                    <a class="nav-link" href="<?php echo $page->url; ?>">
                        <?php echo $page->title; ?>
                    </a><!-- /nav-link -->
                </li><!-- /nav-item -->
            <?php endforeach; ?>
        </ul><!-- /navbar -->
    </div><!-- /collapse -->
  </nav>

  <div class="container">
