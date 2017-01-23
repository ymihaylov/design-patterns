<?php

abstract class HomeChecker {
    protected $successor;

    public abstract function check(HomeStatus $home);

    // Or setSuccessor
    public function succeedWith(HomeChecker $successor)
    {
        $this->successor = $successor;
    }

    public function next(HomeStatus $home)
    {
        if ($this->successor) {
            $this->successor->check($home);
        }
    }
}

class Locks extends HomeChecker {
    public function check(HomeStatus $home)
    {
        if ( ! $home->locked) {
            throw new Exception('The doors are not locked!! Abort abort.');
        }

        $this->next($home);
    }
}

class Lights extends HomeChecker {
    public function check(HomeStatus $home)
    {
        if ( ! $home->lightsOff) {
            throw new Exception('The lights are still on!! Abort abort.');
        }

        $this->next($home);
    }
}

class Alarm extends HomeChecker {
    public function check(HomeStatus $home)
    {
        if ( ! $home->alarmOn) {
            throw new Exception('The alarm has not been set!! Abort abort.');
        }

        $this->next($home);
    }
}

class HomeStatus {
    public $alarmOn   = true;
    public $locked    = true;
    public $lightsOff = true;
}

$lights  = new Lights;
$alarm   = new Alarm;
$locks   = new Locks;

$lights->succeedWith($alarm);
$alarm->succeedWith($locks);

$lights->check(new HomeStatus);