<?php

declare(strict_types=1);

namespace DeptracPortsAdaptersSample\Tests\PackageA;

use DeptracPortsAdaptersSample\Core\Logger;
use DeptracPortsAdaptersSample\PackageA\SomeAClass;
use DeptracPortsAdaptersSample\PackageB\SomeBClass;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

final class SomeAClassTest extends TestCase
{
    private SomeAClass $sut;
    private MockObject|SomeBClass $someBClassMock;
    private MockObject|Logger $loggerMock;

    protected function setUp(): void
    {
        $this->someBClassMock = $this->createMock(SomeBClass::class);
        $this->loggerMock = $this->createMock(Logger::class);
        $this->sut = new SomeAClass();
    }

    public function testDoSomethingAThingyCalls(): void
    {
        $this->someBClassMock
            ->expects($this->once())
            ->method('doSomethingBThingy');

        $this->loggerMock
            ->expects($this->once())
            ->method('log');

        $this->sut->doSomethingAThingy($this->someBClassMock, $this->loggerMock);
    }
}