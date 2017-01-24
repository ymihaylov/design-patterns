<?php

namespace Acme;

class CustomerIsGold implements CustomerSpecification {
    public function isSatisfiedBy(Customer $customer)
    {

        return $customer->plan == 'gold';
    }
}