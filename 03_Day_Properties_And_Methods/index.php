<?php

class Car
{
    /**
     * @var string $color
     */
    public $color;

    /**
     * @var string $model
     */
    public $model;

    /**
     * @var int $year
     */
    private $year;

    /**
     * Car constructor.
     * @param string $color
     * @param string $model
     * @param int $year
     *
     * @return void
     */
    public function __construct($color, $model, $year)
    {
        $this->color = $color;
        $this->model = $model;
        $this->year = $year;
    }

    /**
     * Method drive
     *
     * @return string
     */
    public function drive(): string
    {
        return "Driving a {$this->color} {$this->model} from the year {$this->year}.";
    }

    /**
     * Method honk
     *
     * @return string
     */
    private function honk(): string
    {
        return "Beep Beep!";
    }

    /**
     * Method makeSound
     *
     * @return string
     */
    public function makeSound(): string
    {
        return $this->honk();
    }
}

// create an object
$myCar = new Car("red", "Toyota", 2020);
echo $myCar->drive();    // output: Driving a red Toyota from the year 2020.
echo $myCar->makeSound(); // output: Beep Beep!
