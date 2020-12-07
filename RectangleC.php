<?php


class RectangleC extends Point implements PointInterface
{
    private $w;  //width
    private $h;  //height

    public function __construct($x, $y, $w, $h)
    {
        parent::__construct($x, $y);
        $this->w = $w;
        $this->h = $h;
    }

    public function show()
    {
        echo 'width = ' . $this->w . ' height = ' . $this->h;
    }

    public function area()
    {
        return $this->w * $this->h;
    }

    public function perimeter()
    {
        return ($this->w + $this->h) * 2;
    }
}