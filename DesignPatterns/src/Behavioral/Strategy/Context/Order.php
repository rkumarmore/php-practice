<?php
namespace App\Behavioral\Strategy\Context;

use App\Behavioral\Strategy\Strategy\Prototype\PaymentGateway;

class Order{
    
    private PaymentGateway $paymentGateway;

    public function setPaymentGateway(PaymentGateway $paymentGateway){
        $this->paymentGateway = $paymentGateway;
    }

    public function pay($amount){
        $this->paymentGateway->pay($amount);
    }
}