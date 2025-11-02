<?php

declare(strict_types=1);

namespace DeptracPortsAdaptersSample\Tests\Order;

use DeptracPortsAdaptersSample\Infrastructure\Logger;
use DeptracPortsAdaptersSample\Order\OrderProcessor;
use DeptracPortsAdaptersSample\Payment\PaymentGateway;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

final class OrderProcessorTest extends TestCase
{
    private OrderProcessor $sut;
    private MockObject|PaymentGateway $paymentGatewayMock;
    private MockObject|Logger $loggerMock;

    public function testProcessOrderCalls(): void
    {
        $this->paymentGatewayMock
            ->expects($this->once())
            ->method('charge');

        $this->loggerMock
            ->expects($this->once())
            ->method('log');

        $this->sut->processOrder($this->paymentGatewayMock, $this->loggerMock);
    }

    protected function setUp(): void
    {
        $this->paymentGatewayMock = $this->createMock(PaymentGateway::class);
        $this->loggerMock = $this->createMock(Logger::class);
        $this->sut = new OrderProcessor();
    }
}