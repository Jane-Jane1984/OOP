<?php
//require_once 'PointInterface.php';

class CircleC extends Point implements PointInterface
{
    private $r; //радиус

    public function __construct($x, $y, $r)
    {
        parent::__construct($x, $y);
        $this->r = $r;
    }

    public function show()
    {
        echo 'radius = ' . $this->r;
    }

    public function area()
    {
        return PointInterface::PI * $this->r * $this->r;
    }

    public function perimeter()
    {
        return 2 * PointInterface::PI * $this->r;
    }
}