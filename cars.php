<?php

class Car
{
    private $color;
    private $model;

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }
}

$car1 = new Car();
$car2 = new Car();
$car3 = new Car();

$car1->setColor('black');
$car1->setModel('Mazda');

$car2->setColor('white');
$car2->setModel('Ford');

$car3->setColor('blue');
$car3->setModel('Renault');

$arCars = [
    $car1,
    $car2,
    $car3
];


echo 'Cars for sale: ' . '</br>';

foreach ($arCars as $arCar){
    echo 'model: ' . $arCar->getModel() . ', color: ' . $arCar->getColor() . ';' . '</br>';

}




