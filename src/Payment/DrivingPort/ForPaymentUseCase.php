<?php

namespace DeptracPortsAdaptersSample\Payment\DrivingPort;

interface ForPaymentUseCase
{
    public function charge(): void;
}