<?php
require_once __DIR__ . "/vendor/autoload.php";

use Servises\Transporters\Base\Transporter;
use Servises\Transporters\RussianPostTransporter;
use Servises\Transporters\DHLTransporter;



$deliveryPriceTransporter = new Transporter(new RussianPostTransporter(9));
echo "Стоимоть доставки Почта России ". $deliveryPriceTransporter->deliveryPrice(). PHP_EOL;
// setTransporter можно задавать Перевозчиков , если объект создан
$deliveryPriceTransporter ->setTransporter(new RussianPostTransporter(1));
echo "Стоимоть доставки Почта России ". $deliveryPriceTransporter->deliveryPrice(). PHP_EOL;

$deliveryPriceTransporter = new Transporter(new RussianPostTransporter(11));
echo "Стоимоть доставки Почта России ". $deliveryPriceTransporter->deliveryPrice(). PHP_EOL;

$deliveryPriceTransporter = new Transporter(new DHLTransporter(18));
echo "Стоимоть доставки DHL ". $deliveryPriceTransporter->deliveryPrice(). PHP_EOL;

