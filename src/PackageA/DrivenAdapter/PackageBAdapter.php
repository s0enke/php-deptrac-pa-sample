<?php

namespace DeptracPortsAdaptersSample\PackageA\Adapter;

use DeptracPortsAdaptersSample\PackageA\DrivenPort\PackageBPort;
use DeptracPortsAdaptersSample\PackageB\SomeBClass;

class PackageBAdapter implements PackageBPort
{
    public function __construct(private readonly SomeBClass $someBClass)
    {
    }

    public function doSomethingBThingy(): void
    {
        $this->someBClass->doSomethingBThingy();
    }
}