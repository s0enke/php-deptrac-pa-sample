<?php

declare(strict_types=1);

namespace DeptracPortsAdaptersSample\Tests\PackageA;

use DeptracPortsAdaptersSample\Core\Logger;
use DeptracPortsAdaptersSample\PackageA\DrivenAdapter\LoggerAdapter;
use DeptracPortsAdaptersSample\PackageA\DrivenPort\LoggerPort;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

final class LoggerAdapterTest extends TestCase
{
    private LoggerAdapter $sut;
    private MockObject|Logger $loggerMock;

    public function testImplementsLoggerPort(): void
    {
        $this->assertInstanceOf(LoggerPort::class, $this->sut);
    }

    public function testLogCallsUnderlyingLogger(): void
    {
        $this->loggerMock
            ->expects($this->once())
            ->method('log');

        $this->sut->log();
    }

    protected function setUp(): void
    {
        $this->loggerMock = $this->createMock(Logger::class);
        $this->sut = new LoggerAdapter($this->loggerMock);
    }
}