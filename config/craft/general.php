<?php
return array_merge(
  array(
    'devMode' => boolval($_ENV['DEV_MODE']),
    'useCompressedJs' => !boolval($_ENV['DEV_MODE']),
    'omitScriptNameInUrls' => true,
    'allowAutoUpdates' => false,
    'imageDriver' => 'imagick',
    'cacheMethod' => 'redis',
    'overridePhpSessionLocation' => "tcp://{$_ENV['REDIS_HOST']}:{$_ENV['REDIS_PORT']}?database={$_ENV['REDIS_DATABASE']}",
    'validationKey' => $_ENV['CRAFT_VALIDATION_KEY'],
    'appId' => 'craft',
    'generateTransformsBeforePageLoad' => true,
    'sendPoweredByHeader' => false,
    'phpSessionName' => 'sid',
  ),
  require(__DIR__ . '/overrides/general.php')
);
