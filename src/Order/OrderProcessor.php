<?php

namespace DeptracPortsAdaptersSample\Order;

use DeptracPortsAdaptersSample\Infrastructure\Logger;
use DeptracPortsAdaptersSample\Order\DrivenPort\ForPayment;

class OrderProcessor
{
    public function processOrder(ForPayment $forPayment, Logger $logger): void
    {
        $forPayment->charge();
        $logger->log();
    }
}