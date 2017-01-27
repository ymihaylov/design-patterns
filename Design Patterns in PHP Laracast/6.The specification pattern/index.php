 <?php

require 'vendor/autoload.php';

use Acme\Customer;
use Acme\CustomerIsGold;
use Acme\CustomersRepository;

$customers = new CustomersRepository(
    [
        new Customer('gold'),
        new Customer('silver'),
        new Customer('bronze'),
        new Customer('gold'),
    ]
);

$spec    = new CustomerIsGold;
$results = $customers->matchingSpecification(new CustomerIsGold);

// $specification  = new CustomerIsGold;
// $goldCustomer = new Customer('gold');
// $var = $specification->isSatisfiedBy($goldCustomer);
// var_dump($var);