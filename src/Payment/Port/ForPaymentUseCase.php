<?php

namespace DeptracPortsAdaptersSample\Payment\Port;

interface ForPaymentUseCase
{
    public function charge(): void;
}