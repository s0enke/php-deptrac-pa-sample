<?php

namespace DeptracPortsAdaptersSample\Payment;

use DeptracPortsAdaptersSample\Payment\DrivingPort\ForPaymentUseCase;

class PaymentGateway implements ForPaymentUseCase
{
    public function charge(): void
    {
    }
}