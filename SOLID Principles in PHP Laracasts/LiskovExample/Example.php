<?php

class A {
    public function fire()
    {

    }
}

class B extends A {
    public function fire()
    {

    }
}

function doSomething(A $obj)
{
}

doSomething(new B);
// We can substitute $obj with B
// Everything should work