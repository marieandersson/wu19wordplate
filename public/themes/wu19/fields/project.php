<?php

declare(strict_types=1);

if(function_exists('acf_add_local_field_group')) {

  acf_add_local_field_group([
    'key' => 'project_info',
    'title' => 'Project info',
    'fields' => [
      [
        'key' => 'project_customer',
        'label' => 'Customer',
        'name' => 'project_customer',
        'type' => 'text',
        'instructions' => 'Fill out if the project was made for a customer',
      ],
      [
        'key' => 'project_website',
        'label' => 'Website',
        'name' => 'project_website',
        'type' => 'url',
        'instructions' => 'Fill out any showcase website url',
      ],
    ],
    'location' => [
      [
        [
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'project',
        ],
      ],
    ],
    'position' => 'side',
  ]);
}
