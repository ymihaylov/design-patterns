<?php

// Define a family of algorithms
// Encapsulate and make them interchangeachable

interface Logger {
    public function log($data);
}

class LogToFile implements Logger {
    public function log($data)
    {
        var_dump('Log the data to a file.');
    }
}

class LogToDatabase implements Logger {
    public function log($data)
    {
        var_dump('Log the data to database.');
    }
}

class LogToXWebService implements Logger {
    public function log($data)
    {
        var_dump('Log the data to Sass site.');
    }
}

class App {
    public function log($data, Logger $logger = null)
    {
        $logger = $logger ?: new LogToFile;
        $logger->log($data);
    }
}

$app = new App;
$app->log('Some Information here', new LogToDatabase);
