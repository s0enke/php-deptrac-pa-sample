<?php

namespace DeptracPortsAdaptersSample\Order;

use DeptracPortsAdaptersSample\Infrastructure\Logger;
use DeptracPortsAdaptersSample\Payment\PaymentGateway;

class OrderProcessor
{
    public function processOrder(PaymentGateway $paymentGateway, Logger $logger): void
    {
        $paymentGateway->charge();
        $logger->log();
    }
}