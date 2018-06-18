<?php
  $user = [
    'name' => 'Brad',
    'email' => 'brad@gmail.com',
    'age' => 35,
  ];

  setcookie('user', $user, time() + (84600 * 30));



?>
