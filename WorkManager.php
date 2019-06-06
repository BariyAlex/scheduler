<?php


namespace Scheduler;


class WorkManager
{
    private $settingsStorage;

    public function __construct(WorkSettingsStorage $settingsStorage)
    {
        $this->settingsStorage = $settingsStorage;
    }

    public function runWork(string $code, bool $inThisProcess = false): void
    {
    }

    public function runAllWorks(bool $inThisProcess = false): void
    {

    }
}