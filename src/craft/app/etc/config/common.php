<?php
$configArray = require(__DIR__ . '/common_original.php');

$configArray['componentAliases'][] = 'app.services.SLPluginsService';
$configArray['components']['plugins']['class'] = 'Craft\SLPluginsService';

$configArray['componentAliases'][] = 'app.services.SLUpdatesService';
$configArray['components']['updates']['class'] = 'Craft\SLUpdatesService';

$configArray['componentAliases'][] = 'app.consolecommands.BaseUpdateCommand';
return $configArray;
