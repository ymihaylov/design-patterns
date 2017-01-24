<?php

namespace Acme;

class Customer {
    public $plan;

    public function __construct($plan)
    {
        $this->plan = $plan;
    }
}