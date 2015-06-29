<?php

return [
    'full_name' => [
        'not_empty' => 'Fullname is required.',
        'min_length' => 'The full name must be at least :param2 characters long.',
        'max_length' => 'The full name must be less than :param2 characters long.',
    ],
    'username' => [
        'not_empty' => 'Username is required.',
        'min_length' => 'The username must be at least :param2 characters long.',
        'max_length' => 'The username must be less than :param2 characters long.',
        'username_available' => 'Username is not available.',
    ],
    'old_password' => [
        'old_password_exist' => 'Old password does not exist.'
    ],
];