<?php


namespace Scheduler;


class WorkSettings
{
    private $interval;
    private $enabled;

    public function __construct(string $interval, bool $enabled = false)
    {
        $this->interval = $interval;
        $this->enabled = $enabled;
    }

    public function changeInterval(string $interval): void
    {
        $this->interval = $interval;
    }

    public function getInterval(): string
    {
        return $this->interval;
    }

    public function enable(): void
    {
        $this->enabled = true;
    }

    public function disable(): void
    {
        $this->enabled = false;
    }

    public function isEnabled(): bool
    {
        return $this->enabled;
    }
}