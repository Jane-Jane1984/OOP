<?php


class Label extends Input
{
    private $for;
    

    public function __construct($background, $width, $height, $name, $value, $forObject)
    {
        $this->setBackground($background);
        $this->setWidth($width);
        $this->setHeight($height);
        $this->setName($name);
        $this->setValue($value);
        $this->for = $forObject;
    }


    public function getParentName()
    {
        return $this->for;
    }

    public function setParentName($obj)
    {
        $this->for = $obj->getName();
    }


}

/**
 * Создать класс Label , который будет добавлять label
ко всем элементам управления, унаследовать класс
Control. Добавить к классу Label private-поле for, метод
getParentName(), который не принимает в качестве
параметров ничего и возвращает значение поля for,
setParentName(), который принимает в качестве параметров объект класса Button или Text, вызывает из
этого объекта метод getName() и записывает в поле
for результат его выполнения, и конструктор, принимающий в качестве параметров _background, _width,
_height, _name, _value, _forObject и вызывает соответствующие методы для заполнения параметров поля
 */