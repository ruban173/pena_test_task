<?php

namespace Servises\Transporters\Base;



class Transporter
{

    public function __construct(private IPrice $transporter)
    {
        $this->transporter = $transporter;
    }

    public function setTransporter(IPrice $transporter)
    {
        $this->transporter = $transporter;
    }


    public function deliveryPrice(): float
    {
        return $this->transporter->price();
    }
}