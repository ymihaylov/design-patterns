<?php

namespace Acme;

class VeggieSub extends Sub {
    public function addPrimaryToppings()
    {
        var_dump('add vegies');

        return $this;
    }
}