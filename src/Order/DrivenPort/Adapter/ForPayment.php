<?php

namespace DeptracPortsAdaptersSample\Order\DrivenPort\Adapter;

use DeptracPortsAdaptersSample\Payment\DrivingPort\ForPaymentUseCase;

readonly class ForPayment implements \DeptracPortsAdaptersSample\Order\DrivenPort\ForPayment
{
    public function __construct(
        private ForPaymentUseCase $forPaymentUseCase,
    ) {
    }

    public function charge(): void
    {
        $this->forPaymentUseCase->charge();
    }
}