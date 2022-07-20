<?php

namespace Servises\Transporters;

use Servises\Transporters\Base\IPrice;

class DHLTransporter implements IPrice
{
    public function __construct(private float|int $weight)
    {
        $this->weight = $weight;
    }

    public function price(): float
    {
        return ceil($this->weight) * 100;
    }
}