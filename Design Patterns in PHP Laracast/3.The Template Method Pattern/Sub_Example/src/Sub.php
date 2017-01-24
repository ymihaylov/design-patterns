<?php

namespace Acme;

abstract class Sub {
    public function make()
    {
        // Its Algorithm
        return $this
            ->layBread()
            ->addLettuce()
            ->addPrimaryToppings()
            ->addSauces();
    }

    protected function layBread()
    {
        var_dump('laying down the bread');

        return $this;
    }

    protected function addLettuce()
    {
        var_dump('add some lettuce');

        return $this;
    }

    protected function addSauces()
    {
        var_dump('add oil and vegatiran');

        return $this;
    }

    protected abstract function addPrimaryToppings();
}