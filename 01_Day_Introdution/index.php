<?php

abstract class Animal
{
    /**
     * The name of the animal Encapsulation (Tính đóng gói)
     *
     * @var string
     */
    protected $name;

    /**
     * Create a new animal
     *
     * @param string $name The name of the animal
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Get the name of the animal
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Abstract method for speak Polymorphism (Tính đa hình)
     *
     * @return string
     */
    abstract public function speak();
}

/**
 * Dog class that extends Animal Inheritance (Tính kế thừa)
 */
class Dog extends Animal
{
    /**
     * Get the name of the animal Polymorphism (Tính đa hình)
     *
     * @return string
     */
    public function speak()
    {
        return "{$this->name} barks";
    }
}

$dog = new Dog('chiwawa');
echo $dog->speak(); // chiwawa barks

/**
 * Cat class that extends Animal Inheritance (Tính kế thừa)
 */
class Cat extends Animal
{
    /**
     * Get the name of the animal Polymorphism (Tính đa hình)
     *
     * @return string
     */
    public function speak()
    {
        return "{$this->name} meows";
    }
}

$cat = new Cat('kitty');
echo $cat->speak(); // kitty meows
