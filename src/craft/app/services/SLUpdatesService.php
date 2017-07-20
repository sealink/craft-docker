<?php
namespace Craft;

class SLUpdatesService extends UpdatesService {
  public function hasCraftVersionChanged() {
    return version_compare(craft()->getVersion(), CRAFT_VERSION, '<');
  }

  public function isSchemaVersionCompatible() {
    return true;
  }
}
