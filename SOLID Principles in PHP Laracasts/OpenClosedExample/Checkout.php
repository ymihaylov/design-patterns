<?php

// To Accept multiple payment types

interface PaymentMethodInterface {
    public function acceptPayment($receipt);
}

class CashPaymentMethod implements PaymentMethodInterface {
    public function acceptPayment($recepit)
    {
        # Accept payment
    }
}

class Checkout {
    public function begin(Receipt $receipt, PaymentMethodInterface $payment)
    {
        $payment->acceptPayment();
    }
}