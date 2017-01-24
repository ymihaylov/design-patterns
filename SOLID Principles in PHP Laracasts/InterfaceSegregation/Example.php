<?php

interface ManagableInterface {
    public function beManaged();
}

interface WorkableInterface {
    public function work();
}

interface SleepableInterface {
    public function sleep();
}

class HumanWorker implements WorkableInterface, SleepableInterface, ManagableInterface {
    public function work() {  return 'human working'; }
    public function sleep() { return 'human sleeping'; }
    public function beManaged()
    {
        $this->work();
        $this->sleep();
    }
}

class AndroidWorker implements WorkableInterface, ManagableInterface {
    public function work() { return 'android working'; }

    public function beManaged()
    {
        $this->work();
    }
    // public function sleep() { return null; } // Force to implement this method
}


class Captain {
    // The captain has knowledge for Worker
    public function manage(ManagableInterface $worker)
    {
        $worker->beManaged();
    }
}