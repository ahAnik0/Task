<?php

class Shape {
    // This is a base class for other shapes
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}

class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea() {
        return $this->width * $this->height;
    }
}
// Example usage
$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);

$circleArea = $circle->calculateArea();
$rectangleArea = $rectangle->calculateArea();

echo "Circle Area: " . $circleArea . "\n";
echo "Rectangle Area: " . $rectangleArea . "\n";