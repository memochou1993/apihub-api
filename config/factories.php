<?php

return [

    'user' => [
        'username' => 'admin',
        'name' => 'Admin',
        'email' => 'admin@email.com',
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
    ],

    'project' => [
        'name' => 'project',
        'description' => 'test project',
        'private' => true,
    ],

];