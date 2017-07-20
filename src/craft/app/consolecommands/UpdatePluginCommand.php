<?php
namespace Craft;

class UpdatePluginCommand extends BaseUpdateCommand {
  public function actionIndex() {
    $handle = $this->nextUpdateHandle();
    $exitCode = $handle && $this->updateHandle($handle) ? 0 : 1;
    return $exitCode;
  }

  public function actionHasMore() {
    $exitCode = $this->updatesService()->isPluginDbUpdateNeeded() ? 0 : 1;
    return $exitCode;
  }

  private function nextUpdateHandle() {
    $handle = $this->updatesVariable()->getManualUpdateHandle();
    return $handle ? mb_strtolower($handle) : null;
  }

  private function updatesVariable() {
    return (new CraftVariable)->updates();
  }
}
