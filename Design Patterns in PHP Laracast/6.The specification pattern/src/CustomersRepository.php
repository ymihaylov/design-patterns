<?php

namespace Acme;

class CustomersRepository {
    protected $customers;

    public function __construct(array $customers)
    {
        $this->customers = $customers;
    }

    public function matchingSpecification($specification)
    {
        return array_filter($this->customers, function ($customer) use ($specification) {
            return $specification->isSatisfiedBy($customer);
        });
    }

    public function all()
    {
        return $this->customers;
    }
}