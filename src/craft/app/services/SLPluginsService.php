<?php
namespace Craft;

class SLPluginsService extends PluginsService {
  public function hasPluginVersionNumberChanged(BasePlugin $plugin) {
    return false;
  }
}
