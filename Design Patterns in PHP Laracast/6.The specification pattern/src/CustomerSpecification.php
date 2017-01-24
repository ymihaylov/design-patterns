<?php

namespace Acme;

interface CustomerSpecification {
    public function isSatisfiedBy(Customer $customer);
}