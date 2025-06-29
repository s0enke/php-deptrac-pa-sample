<?php

declare(strict_types=1);

namespace DeptracPortsAdaptersSample\Tests\PackageA;

use DeptracPortsAdaptersSample\PackageA\Port\LoggerPort;
use DeptracPortsAdaptersSample\PackageA\Port\PackageBPort;
use DeptracPortsAdaptersSample\PackageA\SomeAClass;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

final class SomeAClassTest extends TestCase
{
    private SomeAClass $sut;
    private MockObject|LoggerPort $loggerPortMock;
    private MockObject|PackageBPort $packageBPortMock;

    public function testDoSomethingAThingyCalls(): void
    {
        $this->packageBPortMock
            ->expects($this->once())
            ->method('doSomethingBThingy');

        $this->loggerPortMock
            ->expects($this->once())
            ->method('log');

        $this->sut->doSomethingAThingy();
    }

    protected function setUp(): void
    {
        $this->loggerPortMock = $this->createMock(LoggerPort::class);
        $this->packageBPortMock = $this->createMock(PackageBPort::class);
        $this->sut = new SomeAClass($this->loggerPortMock, $this->packageBPortMock);
    }
}