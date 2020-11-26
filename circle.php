<?php

class Circle
{
    private $radius;

    public function __construct($r)
    {
        $this->radius = $r;
    }

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function getArea()
    {
        $area = 3.14 * $this->radius*$this->radius;
        return $area;
    }
}
$a = 9;
$circle = new Circle($a);

echo 'Площадь данной окружности ' . $circle->getArea() . ' см.';
echo '<br>';

$circle->setRadius(10);
echo 'Площадь данной окружности ' . $circle->getArea() . ' см.';
echo '<br>';

$circle->setRadius(100);
echo 'Площадь данной окружности ' . $circle->getArea() . ' см.';

