<?php

return array(
    'full_name' => array(
        'not_empty' => 'Fullname is required.',
        'min_length' => 'The username must be at least :param2 characters long.',
        'max_length' => 'The username must be less than :param2 characters long.',
    ),

    'username' => array(
        'not_empty' => 'Username is required.',
        'min_length' => 'The username must be at least :param2 characters long.',
        'max_length' => 'The username must be less than :param2 characters long.',
        'username_available' => 'Username is not available.',
    ),
);