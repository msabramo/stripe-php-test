<?php

class StripeTest extends PHPUnit_Framework_TestCase
{
    /**
     * @expectedException Stripe_AuthenticationError
     */
    public function testStripe()
    {
        Stripe::setApiKey('d8e8fca2dc0f896fd7cb4cb0031ba249');
        $myCard = array('number' => '4242424242424242', 'exp_month' => 5, 'exp_year' => 2015);
        $charge = Stripe_Charge::create(array('card' => $myCard, 'amount' => 2000, 'currency' => 'usd'));
        echo $charge;
    }
}
