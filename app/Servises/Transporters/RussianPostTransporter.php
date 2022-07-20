<?php

namespace Servises\Transporters;

use Servises\Transporters\Base\IPrice;

class RussianPostTransporter implements IPrice
{
    public function __construct(private float|int $weight)
    {
        $this->weight = $weight;
    }

    public function price(): float
    {
        return ($this->weight <= 10) ? 100 : 1000;
    }
}