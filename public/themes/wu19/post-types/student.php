<?php

declare(strict_types=1);

add_action('init', function() {
	register_extended_post_type('student', [
        'show_in_rest' => true,
    ]);
} );
