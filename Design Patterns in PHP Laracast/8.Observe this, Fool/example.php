<?php
// Basic Event system
interface Subject {
    public function attach($observable);
    public function detach($observer);
    public function release();
} // Publisher

interface Observer {
    public function handle();
} // Subscriber / Listner

class Login implements Subject {
    protected $observers = [];

    public function attach($observable)
    {
        if (is_array($observable)) {
            return $this->attachObservers($observable);
        }

        $this->observers[] = $observable;

        return $this;
    }

    private function attachObservers($observers)
    {
        foreach ($observers as $observer) {
            if ( ! $observer instanceof Observer) {
                throw \Exception();
            }

            $this->attach($observer);
        }

        return;
    }

    public function detach($index)
    {
        unset($this->observers[$index]);
    }

    public function release()
    {
        foreach ($this->observers as $observer) {
            $observer->handle();
        }
    }

    public function fire()
    {
        // perform the login
        $this->release();
    }
}

class LogHandler implements Observer {
    public function handle()
    {
        var_dump('Log something important');
    }
}

class EmailNotifier implements Observer {
    public function handle()
    {
        var_dump('Fire off an email');
    }
}

$login = new Login;
$login->attach([new LogHandler, new EmailNotifier]);
$login->release();