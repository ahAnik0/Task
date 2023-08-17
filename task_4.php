<?php

class Animal {
    protected $name;


    public function makeSound() {
        return "Some generic animal sound";
    }
}

class Dog extends Animal {
    public function makeSound() {
        return "Dog sound : Woof! Woof!";
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "Cat sound: Meow!";
    }
}

class Elephant extends Animal {
    public function makeSound() {
        return "Elephant sound: Trumpet!";
    }
}

// Example usage

$dog = new Dog();
echo $dog->makeSound();


?>
