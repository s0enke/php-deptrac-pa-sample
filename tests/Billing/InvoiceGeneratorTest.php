<?php

declare(strict_types=1);

namespace DeptracPortsAdaptersSample\Tests\Billing;

use DeptracPortsAdaptersSample\Billing\InvoiceGenerator;
use DeptracPortsAdaptersSample\Infrastructure\Logger;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

final class InvoiceGeneratorTest extends TestCase
{
    private InvoiceGenerator $sut;
    private MockObject|Logger $loggerMock;

    protected function setUp(): void
    {
        $this->loggerMock = $this->createMock(Logger::class);
        $this->sut = new InvoiceGenerator();
    }

    public function testGenerateInvoiceCalls(): void
    {
        $this->loggerMock
            ->expects($this->once())
            ->method('log');

        $this->sut->generateInvoice($this->loggerMock);
    }
}