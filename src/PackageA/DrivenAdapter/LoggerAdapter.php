<?php

namespace DeptracPortsAdaptersSample\PackageA\DrivenAdapter;

use DeptracPortsAdaptersSample\Core\Logger;
use DeptracPortsAdaptersSample\PackageA\DrivenPort\LoggerPort;

class LoggerAdapter implements LoggerPort
{
    public function __construct(private readonly Logger $logger)
    {
    }

    public function log(): void
    {
        $this->logger->log();
    }
}