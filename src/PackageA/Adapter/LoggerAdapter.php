<?php

namespace DeptracPortsAdaptersSample\PackageA\Adapter;

use DeptracPortsAdaptersSample\Core\Logger;
use DeptracPortsAdaptersSample\PackageA\Port\LoggerPort;

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