<?php

return [
  'database' => [
    'name'        => 'todo',
    'username'    => 'dbeaver',
    'password'    => '',
    'connection'  => 'mysql:host=127.0.0.1',
    'options'     => [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
  ]
];

?>
