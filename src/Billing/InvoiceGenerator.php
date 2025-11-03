<?php

namespace DeptracPortsAdaptersSample\Billing;

use DeptracPortsAdaptersSample\Infrastructure\Logger;

class InvoiceGenerator
{
    public function generateInvoice(Logger $logger): void
    {
        $logger->log();
    }
}