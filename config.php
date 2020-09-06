<?php

return [
    'database' => [
        'name' => 'mytodo',
        'username' => 'admin',
        'password' => '251317',
        'connection' => 'mysql:host=localhost',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];