<?php
declare(strict_types=1);

/*
* Group projects by the tools they were built with
*/

add_action('init', function() {
	register_extended_taxonomy('tool', 'project', [
        'show_in_rest' => true,
        'show_admin_column' => true,
    ]);
} );
