<?php

interface Shape {
    public function area();
}

class Square implements Shape {
    public $width;
    public $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function area()
    {
        return $this->width * $this->height;
    }
}

class Circle implements Shape {
    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function shape()
    {
        return $this->radius * $this->radius * pi();
    }
}


// We create this class to meet single responsibility principle
// First we have only square. But when we have circle too and we change the calculate method we broke the Open-Close Principle
class AreaCalculator {
    public function calculate($shapes)
    {
        $area = [];
        foreach ($shapes as $shape)
        {
            // THIS IS BROKES OPEN CLOSE PRINCIPLE
            // WE NEED TO CHANGE IT ON EVERY NEW SHAPE TYPE
            // if ($shape instanceof Square) {
            //     $area[] = $shape->width * $shape->height;
            // } else {
            //     $area[] = $shape->radius * $shape->radius * pi();
            // }

            // With this we never need to update this code.
            // If we have new shape, we need to create new class that implements shape
            $area[] = $shape->area();
        }

        return array_sum($area);
    }
}