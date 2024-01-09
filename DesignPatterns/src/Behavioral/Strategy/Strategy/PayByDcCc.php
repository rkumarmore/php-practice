<?php
namespace App\Behavioral\Strategy\Strategy;

use App\Behavioral\Strategy\Strategy\Prototype\PaymentGateway;

//Concrete Strategy
class PayByDcCc implements PaymentGateway{
    
    public function pay($amount){
        echo "Amount $amount Paid by DC Cc";
    }
}