<?php

namespace DeptracPortsAdaptersSample\PackageA;

use DeptracPortsAdaptersSample\PackageA\Port\LoggerPort;
use DeptracPortsAdaptersSample\PackageA\Port\PackageBPort;

class SomeAClass
{
    public function __construct(
        private readonly LoggerPort $loggerPort,
        private readonly PackageBPort $packageBPort
    ) {
    }

    public function doSomethingAThingy(): void
    {
        $this->packageBPort->doSomethingBThingy();
        $this->loggerPort->log();
    }
}