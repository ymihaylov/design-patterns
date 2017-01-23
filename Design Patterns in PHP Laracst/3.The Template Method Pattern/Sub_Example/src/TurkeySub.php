<?php

namespace Acme;

class TurkeySub extends Sub {
    public function addPrimaryToppings()
    {
        var_dump('add turkey meat');

        return $this;
    }
}