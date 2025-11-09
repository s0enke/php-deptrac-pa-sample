<?php

namespace DeptracPortsAdaptersSample\Order\DrivenPort;

interface ForPayment
{
    public function charge(): void;
}
