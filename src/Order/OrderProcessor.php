<?php

namespace DeptracPortsAdaptersSample\Order;

use DeptracPortsAdaptersSample\Infrastructure\Logger;
use DeptracPortsAdaptersSample\Payment\Port\ForPaymentUseCase;

class OrderProcessor
{
    public function processOrder(ForPaymentUseCase $forPayment, Logger $logger): void
    {
        $forPayment->charge();
        $logger->log();
    }
}