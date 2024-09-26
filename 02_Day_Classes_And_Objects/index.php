<?php

/**
 * Class is a blueprint for creating objects. It defines properties and methods.
 * Vi: Lớp là một mẫu để tạo ra đối tượng. Nó chứa dữ liệu và các phương thức để xử lý dữ liệu đó.
 */
class Car
{
    /**
     * Properties
     * @var string
     */
    public $model;

    /**
     * Properties
     * @var string
     */
    public $color;

    /**
     * Constructor
     * @param string $model
     * @param string $color
     */
    public function __construct($model, $color)
    {
        $this->model = $model;
        $this->color = $color;
    }

    /**
     * print details
     */
    public function printDetails()
    {
        echo "Model: $this->model, Color: $this->color";
    }
}

// create object car
$car = new Car("BMW", "Black");
$car->printDetails(); // Output: Model: BMW, Color: Black
