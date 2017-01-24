<?php

require 'vendor/autoload.php';

use Acme\Customer;
use Acme\CustomerIsGold;


$customers = new CustomersRepository;
$spec      = new CustomerIsGold;
$customers->bySpecification($spec);

// $specification  = new CustomerIsGold;
// $goldCustomer = new Customer('gold');
// $var = $specification->isSatisfiedBy($goldCustomer);
// var_dump($var);