<?php

class Rectangle
{
    private $height;
    private $width;

//    public function __construct($h, $w)
//    {
//        $this->height = $h;
//        $this->width = $w;
//    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    public function getSquare($h, $w)
    {
        $square = $h * $w;
        return $square;
    }

    public function getPerimetr($h, $w)
    {
        $perimetr = ($h + $w)*2;
        return $perimetr;
    }
}
$rec = new Rectangle();

echo 'Площадь данного прямоугольника равна ' . $rec->getSquare(5, 40) . 'см.';
echo '<br>';
echo 'Периметр данного прямоугольника равен ' . $rec->getPerimetr(30, 4) . ' см.';
echo '</br>';

$h = 8;
$w = 4;
echo 'Площадь данного прямоугольника равна ' . $rec->getSquare($h, $w) . 'см.';
echo '<br>';
echo 'Периметр данного прямоугольника равен ' . $rec->getPerimetr($h, $w) . ' см.';

