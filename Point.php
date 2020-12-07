<?php

class Point
{
    protected $x;
    protected $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function show()
    {
        echo 'x = ' . $this->x . ' y = ' . $this->y;
    }


    //abstract public function area(); // в данном классе этот метод не будет реализован, но будет перезаписан в наследниках

    //abstract public function perimeter(); //еренесли абстрактные методы v pointInterface
}