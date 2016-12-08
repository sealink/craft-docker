<?php

/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */

return array(
  'server' => $_ENV['DATABASE_HOST'],
  'port' => $_ENV['DATABASE_PORT'],
  'database' => $_ENV['DATABASE_NAME'],
  'user' => $_ENV['DATABASE_USER'],
  'password' => $_ENV['DATABASE_PASSWORD'],
  'tablePrefix' => $_ENV['DATABASE_TABLE_PREFIX'] ?: 'craft',
);
