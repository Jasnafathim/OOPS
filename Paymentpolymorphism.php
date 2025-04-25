<?php
abstract class PaymentMethod
{    
    abstract public function processPayment();
}

class CreditCardPayment extends PaymentMethod
{
        public function processPayment(){
        echo "Processing payment through credit card. <br/>";
    }
}

class PayPalPayment extends PaymentMethod {
        public function processPayment() {
        echo "Processing payment through paypal.<br/>";
    }
}

function makePayment(PaymentMethod $paymentMethod)
{
    $paymentMethod->processPayment();
}

$creditCardPayment =new CreditCardPayment();
$payPalPayment =new PayPalPayment();

makePayment($creditCardPayment);
makePayment($payPalPayment);
?>
