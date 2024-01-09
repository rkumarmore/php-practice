<?php
namespace App\Behavioral\Strategy\Strategy;

use App\Behavioral\Strategy\Strategy\Prototype\PaymentGateway;
//Concrete Strategy
class PayByPaypal implements PaymentGateway{
    
    public function pay($amount){
        echo "Amount $amount paid by Paypal";
    }
}