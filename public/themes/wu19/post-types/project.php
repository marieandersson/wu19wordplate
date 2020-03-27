<?php

declare(strict_types=1);

add_action('init', function() {
	register_extended_post_type('project', [
        'show_in_rest' => true, // Enable block editor
        'has_archive' => false, // Turning of archive page
        'menu_icon'   => 'dashicons-portfolio',
    ]);
} );
