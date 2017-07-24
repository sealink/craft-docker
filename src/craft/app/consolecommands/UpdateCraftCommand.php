<?php
namespace Craft;

class UpdateCraftCommand extends BaseUpdateCommand {
  public function actionIndex() {
    if (!$this->checkIfBreakpoint())
      return 1;
    $exitCode = $this->updateHandle('craft') ? 0 : 1;
    return $exitCode;
  }

  public function actionHasMore() {
    $exitCode = $this->updatesService()->isCraftDbMigrationNeeded() ? 0 : 1;
    return $exitCode;
  }

  private function checkIfBreakpoint() {
    if (!$this->updatesService()->isBreakpointUpdateNeeded())
      return true;
    $this->printError(
      'Fail to perform automated update.' . PHP_EOL .
      'Please refer to CRAFT_MIN_VERSION_REQUIRED: ' . CRAFT_MIN_VERSION_REQUIRED . PHP_EOL
    );
    return false;
  }
}
