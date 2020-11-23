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

echo $rec->getSquare(5, 2);
echo '<br>';
echo $rec->getPerimetr(3, 4);

