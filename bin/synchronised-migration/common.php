<?php
define('KEY_PREFIX', 'migration-');
define('KEY_FAILED', KEY_PREFIX + 'failed');
define('KEY_IN_PROGRESS', KEY_PREFIX + 'in-progress');

$redis = new Redis;
$redis->connect($_ENV['REDIS_HOST'], $_ENV['REDIS_PORT']);
$redis->select($_ENV['REDIS_DATABASE']);
