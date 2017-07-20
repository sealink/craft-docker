<?php
namespace Craft;

class BaseUpdateCommand extends BaseCommand {
  protected function printError($error) {
    fwrite(STDERR, $error);
  }

  protected function updatesService() {
    return craft()->updates;
  }

  protected function updateHandle($handle) {
    $result = $this->updateDatabase($handle);
    return $this->processResult($result);
  }

  private function updateDatabase($handle) {
    return $this->updatesService()->updateDatabase($handle);
  }

  private function processResult($result) {
    if ($result['success'])
      return true;
    $this->printError(
      "Couldn't update plugin $handle:" . PHP_EOL .
      $result['message'] . PHP_EOL
    );
    return false;
  }
}
