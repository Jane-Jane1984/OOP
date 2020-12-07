<?php


interface PointInterface
{
    const PI = 3.14;

    /**
     * @return mixed
     * вычисляет площадь фигуры
     */
    public function area();


    /**
     * @return mixed
     * вычисляет периметр фигуры
     */
    public function perimeter();
}