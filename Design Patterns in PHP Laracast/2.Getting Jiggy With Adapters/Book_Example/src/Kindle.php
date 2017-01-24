<?php

namespace Acme;

class Kindle implements eReaderInterface {
    public function turnOn()
    {
        var_dump('Turn the kindle on.');
    }

    public function pressNextButton()
    {
        var_dump('Press the Next button on the nook.');
    }
}