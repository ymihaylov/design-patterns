<?php

class CustomerIsGoldTest extends PHPUnit_Framework_TestCase {
    public function a_customer_is_golf_if_they_have_the_respective_type()
    {
        $specification  = new CustomerIsGold;
        $goldCustomer = new Customer('gold');

        $this->assertTrue($specification->isSatisfiedBy($goldCustomer));
    }
}