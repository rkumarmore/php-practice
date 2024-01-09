<?php
namespace App\Behavioral\Strategy\Strategy\Prototype;

// Strategy Interface
interface PaymentGateway{
    public function pay($amount);
}