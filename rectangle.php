<?php

class Rectangle
{
    private $height;
    private $width;

    public function __construct($h, $w)
    {
        $this->height = $h;
        $this->width = $w;
    }
//
//    /**
//     * @return mixed
//     */
//    public function getHeight()
//    {
//        return $this->height;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getWidth()
//    {
//        return $this->width;
//    }

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
$rec = new Rectangle($h, $w);

echo 'Площадь данного прямоугольника равна ' . $rec->getSquare(5, 40) . 'см.';
echo '<br>';
echo 'Периметр данного прямоугольника равен ' . $rec->getPerimetr(30, 4) . ' см.';
echo '</br>';

$b = 6;
$c = 5;
echo 'Площадь данного прямоугольника равна ' . $rec->getSquare($b, $c) . 'см.';
echo '<br>';
echo 'Периметр данного прямоугольника равен ' . $rec->getPerimetr($c, $b) . ' см.';

