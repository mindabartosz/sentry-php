<?php

declare(strict_types=1);

namespace Sentry;

use Sentry\Util\SentryUid;

final class CheckIn
{
    private $id;
    private $monitorId;
    private $status;
    private $duration;

    public function __construct(
        string $id = null,
        string $monitorId = null,
        string $status = null,
        ?int $duration = null
    ) {
        $this->setId($id ?? SentryUid::generate());
        $this->setMonitorId($monitorId);
        $this->setStatus($status);
        $this->setDuration($duration);
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getMonitorId()
    {
        return $this->monitorId;
    }

    public function setMonitorId(string $monitorId): void
    {
        $this->monitorId = $monitorId;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function getDuration()
    {
        return $this->duration;
    }

    public function setDuration(?int $duration): void
    {
        $this->duration = $duration;
    }
}
