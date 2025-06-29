<?php

namespace DeptracPortsAdaptersSample\PackageA\Adapter;

use DeptracPortsAdaptersSample\PackageA\Port\PackageBPort;
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