<?php

declare(strict_types=1);

if(function_exists('acf_add_local_field_group')) {

  acf_add_local_field_group([
    'key' => 'student_info',
    'title' => 'Student info',
    'fields' => [
      [
        'key' => 'email',
        'label' => 'Email',
        'name' => 'email',
        'type' => 'email',
        'instructions' => 'Fill out the students email',
      ],
      [
        'key' => 'github_profile',
        'label' => 'Github profile',
        'name' => 'github_profile',
        'type' => 'url',
        'instructions' => 'Fill out a link to the students github profile',
      ],
      [
        'key' => 'color_profile',
        'label' => 'Color profile',
        'name' => 'color_profile',
        'type' => 'color_picker',
      ]
    ],
    'location' => [
      [
        [
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'student',
        ],
      ],
    ],
    'position' => 'side',
  ]);
}