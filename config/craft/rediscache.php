<?php
return array(
  'hostname' => $_ENV['REDIS_HOST'],
  'port' => intval($_ENV['REDIS_PORT']),
  'database' => intval($_ENV['REDIS_DATABASE']),
);
