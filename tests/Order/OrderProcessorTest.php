<?php

declare(strict_types=1);

namespace DeptracPortsAdaptersSample\Tests\Order;

use DeptracPortsAdaptersSample\Infrastructure\Logger;
use DeptracPortsAdaptersSample\Order\DrivenPort\Adapter\ForPayment;
use DeptracPortsAdaptersSample\Order\OrderProcessor;
use DeptracPortsAdaptersSample\Payment\DrivingPort\ForPaymentUseCase;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

final class OrderProcessorTest extends TestCase
{
    private OrderProcessor $sut;
    private MockObject|ForPaymentUseCase $paymentMock;
    private MockObject|Logger $loggerMock;

    public function testProcessOrderCalls(): void
    {
        $this->paymentMock
            ->expects($this->once())
            ->method('charge');

        $this->loggerMock
            ->expects($this->once())
            ->method('log');

        $this->sut->processOrder(new ForPayment($this->paymentMock), $this->loggerMock);
    }

    protected function setUp(): void
    {
        $this->paymentMock = $this->createMock(ForPaymentUseCase::class);
        $this->loggerMock = $this->createMock(Logger::class);
        $this->sut = new OrderProcessor();
    }
}