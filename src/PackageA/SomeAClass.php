<?php

namespace DeptracPortsAdaptersSample\PackageA;

use DeptracPortsAdaptersSample\Core\Logger;
use DeptracPortsAdaptersSample\PackageB\SomeBClass;

class SomeAClass
{
    public function doSomethingAThingy(SomeBClass $someBClass, Logger $logger): void
    {
        $someBClass->doSomethingBThingy();
        $logger->log();
    }
}